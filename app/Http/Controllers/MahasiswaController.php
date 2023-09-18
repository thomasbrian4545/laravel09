<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject() {
        $mahasiswa = new Mahasiswa;
        dump($mahasiswa);
    }
}
