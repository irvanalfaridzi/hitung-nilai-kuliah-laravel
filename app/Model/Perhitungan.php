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

    public function huruf($a){
        if ($a<=100 && $a>=80) {
            $huruf = "A";
        } else if ($a<=79 && $a>= 75) {
            $huruf = "B+";
        } elseif ($a<=74 && $a>= 65) {
            $huruf = "B";
        } elseif ($a<=64 && $a>= 60) {
            $huruf = "C+";
        } elseif ($a<=59 && $a>= 55) {
            $huruf = "C";
        } elseif ($a<=54 && $a>= 40) {
            $huruf = "D";
        } elseif ($a<=39 && $a>= 0) {
            $huruf = "E";
        }

        return $huruf;
    }
}
