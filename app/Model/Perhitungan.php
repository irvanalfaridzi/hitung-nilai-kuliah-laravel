<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    public function hitungTugas($a){
        return 0.4 * $a;
    }

    public function hitungUts($a){
        return 0.3 * $a;
    }

    public function hitungUas($a){
        return 0.3 * $a;
    }

    public function hitungNilaiAkhir($a,$b,$c){
        return $a + $b + $c;
    }

    public function pertambahan($a,$b){
        return $a + $b;
    }
}
