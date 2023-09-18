<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject()
    {
        $mahasiswa = new Mahasiswa;
        dump($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'Sari Citra Lestari';
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function massAssignment()
    {
        Mahasiswa::create(
            [
                'nim' => '19021044',
                'nama' => 'Rudi Permana',
                'tanggal_lahir' => '2000-08-22',
                'ipk' => 2.5,
            ]
        );
        return "Berhasil di proses";
    }
}
