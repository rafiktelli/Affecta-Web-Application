<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

Class Cursus extends Model implements ToModel,WithHeadingRow
{
    use HasFactory;
    public $timestamps = false;
    Protected $table = "Cursus";
    protected $fillable = ['mat','name','pname','moy1','sess1','resu1','moy2','sess2','resu2','moy3','sess3','resu3','moy4','sess4','resu4','moy5','sess5','resu5','moy6','sess6','resu6','designation','section','obs'];

    public static function getCursus()
    {
         $records = DB::table('cursus')->select('mat','name','pname','moy1','sess1','resu1','moy2','sess2','resu2','moy3','sess3','resu3','moy4','sess4','resu4','moy5','sess5','resu5','moy6','sess6','resu6','designation','section','obs');
         return $records;
    }


    public function model(array $row)
    {

            return new Cursus([
            'mat' => $row['mat'],
            'name' => $row['name'],
            'pname' => $row['pname'],
            'moy1' => $row['1_moy'],
            'resu1' => $row['1_result'],
            'sess1' => $row['1_session'],
            'moy2' => $row['2_moy'],
            'resu2' => $row['2_result'],
            'sess2' => $row['2_session'],
            'moy3' => $row['3_moy'],
            'resu3' => $row['3_result'],
            'sess3' => $row['3_session'],
            'moy4' => $row['4_moy'],
            'resu4' => $row['4_result'],
            'sess4' => $row['4_session'],
            'moy5' => $row['5_moy'],
            'resu5' => $row['5_result'],
            'sess5' => $row['5_session'],
            'moy6' => $row['6_moy'],
            'resu6' => $row['6_result'],
            'sess6' => $row['6_session'],
            'designation' => $row['designation'],
            'section' => $row['sect'],
            'obs' => $row['obs'],

        ]);
    }
}

