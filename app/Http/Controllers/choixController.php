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
use App\Exports\AffResultMultiExport;
use Illuminate\Database;
use App\Exports\EtudiantExport;
use App\Exports\UserMultiSheetExport;
use App\Models\Etudiant;
use App\Models\Choix;
use App\Models\utilisateur;

class choixController extends Controller
{
    public function importForm()
    {
        if (!session()->has('data')) {
            return redirect('login');
        }
        if (session('id') <> '6')    return view('affectation');
        else return redirect('scolarite');
    }


    public function uploadFile(Request $request)
    {
        $tableName = 'liste_choix';

        $rules = ['file' => 'required|file|mimes:xls,xlsx,csv'];
        $this->validate($request, $rules);

            db::unprepared('DELETE FROM liste_choix WHERE dep="'.session()->get('id').'"');
            Excel::import(new Choix, request()->file);
            db::unprepared('UPDATE liste_choix SET dep=' . session('id') . ' WHERE dep IS NULL;');
            $speChar = "'";
            $blanc = "";
            DB::unprepared('
            UPDATE liste_choix SET matricule = REPLACE(matricule,"' . $speChar . '","' . $blanc . '") where 1;
            UPDATE liste_choix SET matricule = concat(matricule," ") where dep="'.session()->get('id').'";
            UPDATE liste_choix SET dep="' . session('id') . '" WHERE dep IS NULL;
            ');

        return back()->with('success', 'le fichier est bien importé');
    }

    public function doAffect(Request $request)
    {



        //get information of each option and nbr of options
        $nbrOption = DB::table('optiondep')->where('idDep', '=', session('id'))->count('idOption');
        $optionData = array();
        $x = DB::table('optiondep')->where('idDep', '=', session('id'))->select('nbPlaceOption', 'idOption')->get();
        $x->toArray();
        for ($i = 0; $i < $nbrOption; $i++) {
            $optionData[$i] = new MyStruct();
            $optionData[$i]->id = $x[$i]->idOption;
            $optionData[$i]->places = $x[$i]->nbPlaceOption;
        }


        // return $optionData[2]->id;
        // get number of students of the departement
        $nbrEtud = DB::table('etudiant')->where('dep', '=', session('id'))->count();
        //affecatation loop
        for ($i = 1; $i < $nbrEtud + 1; $i++) {
            $matricule = DB::table('etudiant')->where('rang_etud_reel', '=', $i)->where('dep', '=', session('id'))->value('matricule');
            $ab = DB::table('liste_choix')->where('matricule', '=', $matricule)->exists();
            if ($ab == TRUE) {
                $rang = DB::table('etudiant')->where('rang_etud_reel', '=', $i)->value('rang_etud');
                $j = 1;
                $done = false;
                $cd = 0;
                while ($done == false && $j <= $nbrOption) {
                    $choice = 'choix' . $j;
                    $stdchoice = DB::table('liste_choix')->where('matricule', '=', $matricule)->value($choice);
                    for ($k = 0; $k < $nbrOption; $k++) {
                        if ($optionData[$k]->id == $stdchoice) $cd = $k;
                    }
                    if ($j == $nbrOption) {
                        $optionData[$cd]->places--;
                        DB::unprepared('update liste_choix set aff ="' . $optionData[$cd]->id . '" where matricule ="' . $matricule . '" ');
                        DB::unprepared('update etudiant set aff ="' . $optionData[$cd]->id . '" where matricule ="' . $matricule . '" ');
                        $optionData[$cd]->lastRang = $rang;
                        $done = TRUE;
                    }
                    if ($done == FALSE) {
                        if ($optionData[$cd]->places < 1) {
                            $j++;
                            if ($optionData[$cd]->lastRang == $rang) {
                                $done = true;
                                $optionData[$cd]->places--;
                                DB::unprepared('update liste_choix set aff ="' . $optionData[$cd]->id . '" where matricule ="' . $matricule . '" ');
                                DB::unprepared('update etudiant set aff ="' . $optionData[$cd]->id . '" where matricule ="' . $matricule . '" ');
                            }
                        } else {
                            $done = true;
                            $optionData[$cd]->places--;
                            DB::unprepared('update liste_choix set aff ="' . $optionData[$cd]->id . '" where matricule ="' . $matricule . '" ');
                            DB::unprepared('update etudiant set aff ="' . $optionData[$cd]->id . '" where matricule ="' . $matricule . '" ');
                            $optionData[$cd]->lastRang = $rang;
                        }
                    }
                }
            } else {

                DB::unprepared('update etudiant set aff="NONE" where matricule ="' . $matricule . '" ');
            }
        }

        //        return $optionData[0]->lastRang;
        //

        /* SECTIOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOON */



        for ($m = 0; $m < session('nb_sect'); $m++) {
            if ($m == 0) { $x = 'A'; } if ($m == 1) { $x = 'B'; } if ($m == 2) { $x = 'C'; } if ($m == 3) { $x = 'D'; } if ($m == 4) { $x = 'E'; } if ($m == 5) { $x = 'F'; } if ($m == 11) { $x = 'L'; } if ($m == 6) { $x = 'G'; } if ($m == 7) { $x = 'H'; } if ($m == 8) { $x = 'I'; } if ($m == 9) { $x = 'J'; } if ($m == 10) { $x = 'K'; }
            $nbrOption = DB::table('optiondep')->where('idDep', '=', session('id'))->count('idOption');
            $optionData1 = array();
            $y = DB::table('optiondep')->where('idDep', '=', session('id'))->select('nbPlaceOption', 'idOption')->get();
            $y->toArray();
            for ($i = 0; $i < $nbrOption; $i++) {
                $optionData1[$i] = new MyStruct();
                $optionData1[$i]->id = $y[$i]->idOption;
                $optionData1[$i]->places = $y[$i]->nbPlaceOption;
            }


            // return $optionData[2]->id;
            // get number of students of the departement
            $nbrEtud = DB::table('etudiant')->where('dep', '=', session('id'))->Where('sect','=',$x)->count();
            //affecatation loop
            for ($i = 1; $i < $nbrEtud + 1; $i++) {
                $matricule = DB::table('etudiant')->where('rang_sect_reel', '=', $i)->where('sect','=',$x)->where('dep', '=', session('id'))->value('matricule');
               // if($i==7) return $x."|".$matricule;
                $ab = DB::table('liste_choix')->where('matricule', '=', $matricule)->exists();
                if ($ab == TRUE) {
                    $rang = DB::table('etudiant')->where('rang_sect_reel', '=', $i)->value('rang_sect');
                    $j = 1;
                    $done = false;
                    $cd = 0;
                    while ($done == false && $j <= $nbrOption) {
                        $choice = 'choix' . $j;
                        $stdchoice = DB::table('liste_choix')->where('matricule', '=', $matricule)->value($choice);
                        for ($k = 0; $k < $nbrOption; $k++) {
                            if ($optionData1[$k]->id == $stdchoice) $cd = $k;
                        }
                        if ($j == $nbrOption) {
                            $optionData1[$cd]->places--;
                            DB::unprepared('update liste_choix set aff_sect ="' . $optionData1[$cd]->id . '" where matricule ="' . $matricule . '" ');
                            DB::unprepared('update etudiant set aff_sect ="' . $optionData1[$cd]->id . '" where matricule ="' . $matricule . '" ');
                            $optionData1[$cd]->lastRang = $rang;
                            $done = TRUE;
                        }
                        if ($done == FALSE) {
                            if ($optionData1[$cd]->places < 1) {
                                $j++;
                                if ($optionData1[$cd]->lastRang == $rang) {
                                    $done = true;
                                    $optionData1[$cd]->places--;
                                    DB::unprepared('update liste_choix set aff_sect ="' . $optionData1[$cd]->id . '" where matricule ="' . $matricule . '" ');
                                    DB::unprepared('update etudiant set aff_sect ="' . $optionData1[$cd]->id . '" where matricule ="' . $matricule . '" ');
                                }
                            } else {
                                $done = true;
                                $optionData1[$cd]->places--;
                                DB::unprepared('update liste_choix set aff_sect ="' . $optionData1[$cd]->id . '" where matricule ="' . $matricule . '" ');
                                DB::unprepared('update etudiant set aff_sect ="' . $optionData1[$cd]->id . '" where matricule ="' . $matricule . '" ');
                                $optionData1[$cd]->lastRang = $rang;
                            }
                        }
                    }
                } else {

                    DB::unprepared('update etudiant set aff_sect="NONE" where matricule="'.$matricule.'";');
                }
                //if ($matricule=='171731052230') return $optionData1[$cd]->id;
            }
        }
        return redirect('afficher-affectation');
    }

    public function downloadFile()
    {
        $f=(int)session('anUniv')+1;
        return Excel::download(new AffResultMultiExport, session('des')." ". session('anUniv')."-".$f.".xlsx");
    }
}















class MyStruct
{
    public $places;
    public $id;
    public $lastRang;
    public function searchOp($choix, $nbrOption)
    {
    }
}
