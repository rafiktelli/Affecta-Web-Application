<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = "etudiant";

    public static function getEtudiant($v)
    {
        if ($v != '') {
            $records = DB::table('etudiant')->select('rang_sect', 'matricule', 'nom_etud', 'pren_etud', 'moy_semestres', 'redoublement_r', 'rattrapage_s', 'dettes_d',  'moy_classement', 'sect')->where('dep', '=', session('id'))->where('sect', '=', $v)->orderBy('moy_classement', 'DESC')->get()->toArray();
        } else {
            $records = DB::table('etudiant')->select('rang_etud', 'matricule', 'nom_etud', 'pren_etud', 'moy_semestres', 'redoublement_r', 'rattrapage_s', 'dettes_d',  'moy_classement', 'sect')->where('dep', '=', session('id'))->orderBy('moy_classement', 'DESC')->get()->toArray();
        }
        return $records;
    }
}
