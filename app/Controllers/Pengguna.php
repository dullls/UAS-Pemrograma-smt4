<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Pengguna extends BaseController

{
    public function index()
    {
        $penggunaModel = new PenggunaModel();
        $pengguna =  $penggunaModel->findAll();
        dd($pengguna);

        $data = [
            'title' => 'daftar pengguna',
            'pengguna' => '$pengguna'
        ];

        return view('admin/index', $data);
    }
}
