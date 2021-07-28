<?php

namespace App\Exports;

use App\Models\Etudiant;
use App\Models\AffResult;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class AffResultExport implements FromCollection,WithHeadings,WithStrictNullComparison,WithTitle
{
    private $v;

    public function __construct(string $v)
    {
        $this->v=$v;
    }

    public function headings():array{
        return[
            'matricule',
            'rang_etud',
            'moy_classement',
            'sect',
            'aff',
            'dep',
            'choix1',
            'choix2',
            'choix3',
            'choix4',
            'choix5',
            'choix6',
            'choix7',
            'choix8',
            'choix9',
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
        return collect(AffResult::getAffResults($this->v));
    }

}
