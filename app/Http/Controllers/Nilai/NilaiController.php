<?php

namespace App\Http\Controllers\Nilai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Perhitungan;

class NilaiController extends Controller
{
    public function index(){
        return view('Nilai/index');
    }

    public function hitung(){
        $perhitungan = new Perhitungan;
        $nama       = $request->input('nama');
        $nim        = $request->input('nim');
        $matakuliah = $request->input('matakuliah');
        $tugas      = $request->input('tugas');
        $uts        = $request->input('uts');
        $uas        = $request->input('uas');
        $ntugas = $perhitungan->hitungTugas($tugas);
        $nuts = $perhitungan->hitungUts($uts);
        $nuas = $perhitungan->hitungUas($uas);
        $na = $perhitungan->hitungNilaiAkhir($ntugas, $nuts, $nuas);
        return view('nilai/hitung',['nama' => $nama, 'nim' => $nim, 'matakuliah' => $matakuliah, 'tugas' => $tugas, 'uts' => $uts, 'uas' => $uas, 'ntugas' => $ntugas, 'nuts' => $nuts, 'nuas' => $nuas, 'na' => $na]);
    }
}
