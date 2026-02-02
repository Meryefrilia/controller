<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
       $data = [
        'nama' => 'Budi',
        'nim'  => '2023001'
    ];

        return view('mahasiswa.index', $data);

    }

}
