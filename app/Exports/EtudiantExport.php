<?php

namespace App\Exports;

use App\Models\Etudiant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class EtudiantExport implements FromCollection,WithHeadings,WithStrictNullComparison,WithTitle
{
    private $v;

    public function __construct(string $v)
    {
        $this->v=$v;
    }
    public function headings():array{
        return[
            'rang_etud',
            'matricule',
            'nom_etud',
            'pren_etud',
            'moy_semestres',
            'redoublement_r',
            'rattrapage_s',
            'dettes_d',
            'moy_classement',
        ];
    }
    public function title():string{
        if($this->v!=''){
        $str='section '.$this->v;
        }else{
            $str='général';
        }

        return $str;
    }

    public function collection()
    {
        return collect(Etudiant::getEtudiant($this->v));
    }
}
