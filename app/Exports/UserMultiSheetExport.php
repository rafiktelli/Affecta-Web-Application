<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UserMultiSheetExport implements WithMultipleSheets
{
    public function sheets():array
    {
        $sheet = [];
        for($i=-1;$i<session('nb_sect');$i++){
            if ($i == -1) {$x = '';} if ($i == 0) {$x = 'A';} if ($i == 1) {$x = 'B';} if ($i == 2) {$x = 'C';} if ($i == 3) {$x = 'D';} if ($i == 4) {$x = 'E';} if ($i == 5) {$x = 'F';} if ($i == 11) {$x = 'L';} if ($i == 6) {$x = 'G';} if ($i == 7) {$x = 'H';} if ($i == 8) {$x = 'I';} if ($i == 9) {$x = 'J';} if ($i == 10) {$x = 'K';}
           $sheet[$i]=new EtudiantExport($x);
    }
        return $sheet;
    }
}
