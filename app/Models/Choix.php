<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


Class Choix extends Model implements ToModel,WithHeadingRow
{
    use HasFactory;
    public $timestamps = false;
    Protected $table = "liste_choix";
    protected $fillable = ['matricule','choix1','choix2','choix3','choix4','choix5','choix6','choix7','choix8','choix9'];


    public function model(array $row)
    {

            return new Choix([
            'matricule' => $row['matricule'],
            'choix1' => $row['choix1'],
            'choix2' => $row['choix2'],
            'choix3' => $row['choix3'],
            'choix4' => $row['choix4'],
            'choix5' => $row['choix5'],
            'choix6' => $row['choix6'],
            'choix7' => $row['choix7'],
            'choix8' => $row['choix8'],
            'choix9' => $row['choix9'],
        ]);
    }
}
