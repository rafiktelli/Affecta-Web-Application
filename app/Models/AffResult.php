<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AffResult extends Model
{
    use HasFactory;
    protected $table = "AffResult";

    public static function getAffResults($v)
    {
        $conn = mysqli_connect("localhost", "root", "", "myseconnddb");
        if ($v != '') {
            $sql = "SELECT etudiant.matricule, matricule, etudiant.rang_sect, round(etudiant.moy_classement,2), etudiant.sect, etudiant.aff,  etudiant.dep, liste_choix.choix1, liste_choix.choix2, liste_choix.choix3, liste_choix.choix4, liste_choix.choix5, liste_choix.choix6, liste_choix.choix7, liste_choix.choix8, liste_choix.choix9  from etudiant left outer join liste_choix using(matricule) where etudiant.dep=" . session('id') . " AND etudiant.sect='". $v ."' ORDER BY etudiant.moy_classement DESC";
            $records = $conn->query($sql);
         //   $records = DB::unprepared("SELECT etudiant.matricule, etudiant.rang_etud_reel, etudiant.rang_etud, round(etudiant.moy_classement,2), etudiant.dep , etudiant.aff, liste_choix.*  from etudiant left outer join liste_choix using(matricule) where etudiant.dep=" . session('id') . " ORDER BY etudiant.moy_classement DESC");
        } else {
            $sql = "SELECT etudiant.matricule, etudiant.rang_etud, round(etudiant.moy_classement,2), etudiant.sect, etudiant.aff, etudiant.dep , liste_choix.choix1, liste_choix.choix2, liste_choix.choix3, liste_choix.choix4, liste_choix.choix5, liste_choix.choix6, liste_choix.choix7, liste_choix.choix8, liste_choix.choix9  from etudiant left outer join liste_choix using(matricule) where etudiant.dep='" . session('id') . "' ORDER BY etudiant.moy_classement DESC";
            $records = $conn->query($sql);
        }
        return $records;
    }
}
