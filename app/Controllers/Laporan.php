<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController

{
    public function index()
    {
        $laporanModel = new LaporanModel();
        $laporan =  $laporanModel->findAll();
        dd($laporan);

        $data = [
            'title' => 'daftar barang',
            'gudang' => '$gudang'
        ];

        return view('laporan/index', $data);
    }
}
