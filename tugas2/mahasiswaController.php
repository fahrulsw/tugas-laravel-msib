<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function dataMahasiswa()
    {
        $m1 = 'Budi Mahasiswa';
        $am1 = 'Bandung';
        $m2 = 'Siti Aminah';
        $am2 = 'Semarang';

        return view(
            'daftar_mahasiswa',
            compact('m1', 'am1', 'm2', 'am2')
        );
    }
    public function nilaiMahasiswa()
    {
        $s1 = ['nama' => 'Fawwaz', 'nilai' => 85];
        $s2 = ['nama' => 'Bedu', 'nilai' => 58];
        $s3 = ['nama' => 'Siti', 'nilai' => 95];
        $s4 = ['nama' => 'Deden', 'nilai' => 30];

        //array assocative
        $siswa = [$s1, $s2, $s3, $s4];
        return view(
            'nilai_mahasiswa',
            compact('siswa', 's1', 's2', 's3', 's4')
        );
    }
}
