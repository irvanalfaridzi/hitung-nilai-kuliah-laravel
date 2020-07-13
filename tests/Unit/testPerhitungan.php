<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
Use App\Model\Perhitungan;

class testPerhitungan extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPertambahan()
    {
        $perhitungan = new Perhitungan();

        $hasil_perhitungan = $perhitungan->pertambahan(2,2);

        $this->assertEquals(4,$hasil_perhitungan);

    }

    public function testTugas()
    {
        $perhitungan = new Perhitungan();

        $hasil_perhitungan = $perhitungan->hitungTugas(100);

        $this->assertEquals(40,$hasil_perhitungan);

    }

    public function testUts()
    {
        $perhitungan = new Perhitungan();

        $hasil_perhitungan = $perhitungan->hitungUts(100);

        $this->assertEquals(30,$hasil_perhitungan);

    }

    public function testUas()
    {
        $perhitungan = new Perhitungan();

        $hasil_perhitungan = $perhitungan->hitungUas(100);

        $this->assertEquals(30,$hasil_perhitungan);

    }

    public function testNa()
    {
        $perhitungan = new Perhitungan();

        $hasil_perhitungan = $perhitungan->hitungNilaiAkhir(40,30,30);

        $this->assertEquals(100,$hasil_perhitungan);

    }

    public function testHuruf()
    {
        $perhitungan = new Perhitungan();

        $hasil_perhitungan = $perhitungan->huruf(74.9);

        $this->assertEquals('B',$hasil_perhitungan);

    }
}
