<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cursus;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use App\Exceptions\InvalidOrderException;
use Illuminate\Database;
use App\Exports\EtudiantExport;
use App\Exports\UserMultiSheetExport;
use App\Models\Etudiant;
use App\Models\utilisateur;

class CursusController extends Controller
{
    public function importForm()
    {
        if (!session()->has('data')) {
            return redirect('login');
        }
        if (session('id') <> '6')    return view('effectuer-classement');
        else return redirect('scolarite');
    }

    public function rankForm()
    {
        if (!session()->has('data')) {
            return redirect('login');
        }
        if (session('id') <> '6')    return view('afficher-classement');
        else return redirect('scolarite');
    }

    public function doRank(Request $request)
    {
        $tableName = session()->get('tablename');
        DB::unprepared('
        UPDATE ' .  $tableName  . ' SET resu1 = CASE WHEN resu1="ADC" THEN 1 WHEN resu1="ADM" THEN 0 END WHERE resu1 in ("ADM","ADC");
        UPDATE ' .  $tableName  . ' SET resu2 = CASE WHEN resu2="ADC" THEN 1 WHEN resu2="ADM" THEN 0 END WHERE resu2 in ("ADM","ADC");
        UPDATE ' .  $tableName  . ' SET resu3 = CASE WHEN resu3="ADC" THEN 1 WHEN resu3="ADM" THEN 0 END WHERE resu3 in ("ADM","ADC");
        UPDATE ' .  $tableName  . ' SET resu4 = CASE WHEN resu4="ADC" THEN 1 WHEN resu4="ADM" THEN 0 END WHERE resu4 in ("ADM","ADC");
        UPDATE ' .  $tableName  . ' SET resu5 = CASE WHEN resu5="ADC" THEN 1 WHEN resu5="ADM" THEN 0 END WHERE resu5 in ("ADM","ADC");
        UPDATE ' .  $tableName  . ' SET resu6 = CASE WHEN resu6="ADC" THEN 1 WHEN resu6="ADM" THEN 0 END WHERE resu6 in ("ADM","ADC");
        UPDATE ' .  $tableName  . ' SET sess1 = CASE WHEN sess1="RJANV" THEN 1 WHEN sess1="JANV" THEN 0 END WHERE sess1 in ("RJANV","JANV");
        UPDATE ' .  $tableName  . ' SET sess2 = CASE WHEN sess2="RJUIN" THEN 1 WHEN sess2="JUIN" THEN 0 END WHERE sess2 in ("RJUIN","JUIN");
        UPDATE ' .  $tableName  . ' SET sess3 = CASE WHEN sess3="RJANV" THEN 1 WHEN sess3="JANV" THEN 0 END WHERE sess3 in ("RJANV","JANV");
        UPDATE ' .  $tableName  . ' SET sess4 = CASE WHEN sess4="RJUIN" THEN 1 WHEN sess4="JUIN" THEN 0 END WHERE sess4 in ("RJUIN","JUIN");
        UPDATE ' .  $tableName  . ' SET sess5 = CASE WHEN sess5="RJANV" THEN 1 WHEN sess5="JANV" THEN 0 END WHERE sess5 in ("RJANV","JANV");
        UPDATE ' .  $tableName  . ' SET sess6 = CASE WHEN sess6="RJUIN" THEN 1 WHEN sess6="JUIN" THEN 0 END WHERE sess6 in ("RJUIN","JUIN");
        UPDATE ' .  $tableName  . ' SET moyenne_T = ( moy1 + moy2 + moy3 + moy4 + moy5 + moy6 ) / 6 ;
        UPDATE ' .  $tableName  . ' SET rattrapage_T = sess1 + sess2 + sess3 + sess4 + sess5 + sess6 ;
        UPDATE ' .  $tableName  . ' SET dettes_T = (resu1 OR resu2) + (resu3 OR resu4) + (resu5 OR resu6) ;
        UPDATE ' .  $tableName  . ' T SET dettes_max=(SELECT MAX(dettes_T) FROM ' .  $tableName  . ' WHERE T.mat = mat GROUP BY mat);
        UPDATE ' .  $tableName  . ' T SET moyenne_max=(SELECT MAX(moyenne_T) FROM ' .  $tableName  . ' WHERE T.mat = mat GROUP BY mat);
        UPDATE ' .  $tableName  . ' T SET rattrapage_max=(SELECT MAX(rattrapage_T) FROM ' .  $tableName  . ' WHERE T.mat=mat AND moyenne_T=moyenne_max GROUP BY mat );

        update ' .  $tableName  . ' SET matcrg = case
        when (SUBSTRING(mat,1,2) = "20") then  mat
        when (SUBSTRING(mat,1,2) != "20") then Concat("20",SUBSTRING(mat,1,2),SUBSTRING(mat,5,length(mat)-4))
        end;


        ');
        //update ' .  $tableName  . ' SET matcrg = Concat("20",SUBSTRING(mat,3,2),SUBSTRING(mat,5,length(mat)-4));


        //  Excel::download(new ListExport, 'list.xlsx');
        $n = 0;
        if (Cursus::where('OBS', '<>', NULL)->count() > 0) {
            $res = Cursus::select('id', 'obs')->whereNotNull('obs')->get();
            $n = $res->count();
            for ($i = 0; $i < $n; $i++) {
                $slashIndex = 0;
                $blankIndex = 0;
                $year = NULL;
                if (Str::contains($res[$i]->obs, 'INSC')) {
                    if (Str::contains($res[$i]->obs, '/')) {
                        while ($res[$i]->obs[$slashIndex] <> '/') $slashIndex++;
                        $beforeS = '';
                        for ($j = 0; $j < $slashIndex; $j++) {
                            $beforeS .= $res[$i]->obs[$j];
                        }

                        $preg = "/20+[0-9]+[0-9] /";
                        if (preg_match($preg, $beforeS)) // si on trouve une année avant le '/'
                        {
                            $j = 0;
                            while ($beforeS[$j] <> '2' || $beforeS[$j + 1] <> '0') {
                                $j++;
                            }
                            if ($beforeS[$j + 4] == ' ') {
                                $singleYear = '';
                                for ($k = $j; $k < $j + 4; $k++) $singleYear .= $beforeS[$k];
                                $singleYear = (int)$singleYear;
                                $year = $singleYear;
                                // return $year;
                            }
                        } else {
                            $blankIndex = $slashIndex - 1;
                            while ($res[$i]->obs[$blankIndex] <> ' ') $blankIndex--;
                            $year = '';
                            $yearN = '';
                            for ($j = $blankIndex + 1; $j < $slashIndex; $j++) {
                                $year .= $res[$i]->obs[$j];
                            }
                            $year = (int)$year;
                            for ($j = $slashIndex + 1; $j < $slashIndex + $slashIndex - $blankIndex; $j++) {
                                $yearN .= $res[$i]->obs[$j];
                            }
                            $yearN = (int)$yearN;

                            if (($yearN == $year + 1)) // si Year est de taille $$ ou 20$$
                            {
                                if ($year < 1000) $year = $year + 2000;
                            } else //Year est dans le 3eme partie de date
                            {
                                $year = NULL;
                                $try = '';
                                for ($j = $slashIndex + 4; $j < $slashIndex + 8; $j++) $try .= $res[$i]->obs[$j];
                                if (var_dump(is_int($try))) {
                                    $try = (int)$try;
                                    $year = $try;
                                } else {
                                    $year = NULL;
                                }
                            }
                        }
                    } else {

                        $preg = "/20+[0-9]+[0-9]/";
                        $beforeS = $res[$i]->obs;
                        if (preg_match($preg, $res[$i]->obs)) // si on trouve une année avant le '/'
                        {
                            $j = 0;
                            while ($beforeS[$j] <> '2' || $beforeS[$j + 1] <> '0') {
                                $j++;
                            }

                            $singleYear = '';
                            for ($k = $j; $k < $j + 4; $k++) $singleYear .= $beforeS[$k];
                            $singleYear = (int)$singleYear;
                            $year = $singleYear;
                        }
                    }
                    Cursus::where('id', $res[$i]->id)->update(['yearinsc' => $year]);
                }
            }
        }




        DB::unprepared('
        UPDATE ' .  $tableName  . ' SET redoublement = CASE
        WHEN (OBS LIKE "%MED%") AND (yearinsc IS NULL)  THEN (select an2 from anneeuniv where idyear=1) - 4 - CAST(SUBSTRING(matcrg,1,4) AS SIGNED)
        WHEN (OBS LIKE "%MED%") AND (yearinsc IS NOT NULL) THEN (select an2 from anneeuniv where idyear=1) - 4 - yearinsc
        WHEN (OBS NOT LIKE "%MED%" OR OBS IS NULL) AND (yearinsc IS NULL) THEN (select an2 from anneeuniv where idyear=1) - 3 - CAST(SUBSTRING(matcrg,1,4) AS SIGNED)
        WHEN (OBS NOT LIKE "%MED%" OR OBS IS NULL) AND (yearinsc IS NOT NULL) THEN (select an2 from anneeuniv where idyear=1) - 3 - yearinsc
        END;
        UPDATE ' .  $tableName  . ' SET moyenneMC = moyenne_max *(1-0.04*(redoublement+dettes_max/2+rattrapage_max/4));
        DELETE FROM etudiant WHERE dep=' . session('id') . ';
        INSERT INTO etudiant (matricule,nom_etud,pren_etud,moy_semestres,redoublement_r,rattrapage_s,dettes_d,moy_classement,dep,sect)
        SELECT DISTINCT mat,name,pname,moyenne_max,redoublement,rattrapage_max, dettes_max,moyenneMC,dep,section FROM ' .  $tableName . ' WHERE dep=' . session('id') . ';
        SET @i := 0;
        UPDATE etudiant SET rang_etud = @i:=@i+1 WHERE dep=' . session('id') . ' ORDER BY moy_classement DESC;
        UPDATE etudiant SET rang_etud_reel = rang_etud where 1;
        UPDATE etudiant AS t INNER JOIN ( SELECT MIN(rang_etud) rangR,round(floor(100*moy_classement)/100,2) moyF FROM etudiant WHERE dep=' . session('id') . ' GROUP BY round(floor(100*moy_classement)/100,2)  ) t1 ON round(floor(100*t.moy_classement)/100,2) = t1.moyF SET t.rang_etud=t1.RangR WHERE dep=' . session('id') . ' ;

        UPDATE etudiant SET matricule= case when substring(matricule,length(matricule),1)!=" " then concat(matricule," ") else matricule
         end;
        ');
        $a = Etudiant::where('dep', '=', session('id'))->select('sect')->distinct('sect')->count();
        session()->put('nb_sect',$a);
        for ($i = 0; $i < $a; $i++) {
            if ($i == 0) {$x = 'A';}
            if ($i == 1) {$x = 'B';}
            if ($i == 2) {$x = 'C';}
            if ($i == 3) {$x = 'D';}
            if ($i == 4) {$x = 'E';}
            if ($i == 5) {$x = 'F';}
            if ($i == 11) {$x = 'L';}
            if ($i == 6) {$x = 'G';}
            if ($i == 7) {$x = 'H';}
            if ($i == 8) {$x = 'I';}
            if ($i == 9) {$x = 'J';}
            if ($i == 10) {$x = 'K';}

            DB::unprepared('
            SET @i := 0;
        UPDATE etudiant SET rang_sect = @i:=@i+1 WHERE dep=' . session('id') . ' AND sect="' . $x . '" ORDER BY moy_classement DESC;
        UPDATE etudiant AS t INNER JOIN ( SELECT MIN(rang_sect) rangR,round(floor(100*moy_classement)/100,2) moyF FROM etudiant WHERE dep=' . session('id') . ' AND sect="' . $x . '" GROUP BY round(floor(100*moy_classement)/100,2)  ) t1 ON round(floor(100*t.moy_classement)/100,2) = t1.moyF SET t.rang_sect=t1.RangR WHERE dep=' . session('id') . ' AND sect="' . $x . '" ;
        SET @i := 0;
        UPDATE etudiant SET rang_sect_reel = @i:=@i+1 WHERE dep=' . session('id') . ' AND sect="' . $x . '" ORDER BY moy_classement DESC;

        ');
        }

        return view('afficher-classement');
    }
    //------------------------------UPLOAD-------------------------------------------------------------------------------------------------------

    public function uploadFile(Request $request)
    {
        $tableName = 'cursus';

        $rules = ['file' => 'required|file|mimes:xls,xlsx,csv'];
        $this->validate($request, $rules);
        DB::unprepared('
         DELETE FROM ' . $tableName . ' WHERE dep=' . session()->get('id') . ';

         ');
        try {
            Excel::import(new Cursus, request()->file);
            DB::unprepared('
            UPDATE ' . $tableName . ' SET dep=' . session('id') . ' WHERE dep IS NULL;
            ');
        } catch (\Illuminate\Database\QueryException $ex) {
          //  return back()->withErrors(["la format de quelque données n'est pas correct! "]);
        } catch (\Exception $e) {
            return back()->withErrors(["Il y a un défaut dans votre fichier"]);
        }

        return back()->with('success', 'le fichier est bien importé');

        //------------------------------DOWNLOAD-------------------------------------------------------------------------------------------------------

    }
    public function downloadFile()
    {
        $f=(int)session('anUniv')+1;
        return Excel::download(new UserMultiSheetExport, session('des')." ". session('anUniv')."-".$f.".xlsx");
      //return Excel::download(new EtudiantExport, "classement.xlsx");
    }
}
