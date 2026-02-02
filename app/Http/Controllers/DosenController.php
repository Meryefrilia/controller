<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    // Membuat array 'dosen' yang berisi 3 data dosen
    $data['dosen'] = [
        [
            'Nama'  => 'Mery',
            'Email' => 'efriliamery@gmail.com',
            'NoHp'  => '081234567890'
        ],
        [
            'Nama'  => 'Aris',
            'Email' => 'aris@example.com',
            'NoHp'  => '081298765432'
        ],
        [
            'Nama'  => 'Budi',
            'Email' => 'budi@example.com',
            'NoHp'  => '081311223344'
        ],
    ];

    return view('dosen.index', $data);
}
}
