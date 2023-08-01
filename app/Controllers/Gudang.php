<?php

namespace App\Controllers;

use App\Models\GudangModel;

class Gudang extends BaseController

{

    public function index()
    {

        $gudangModel = new GudangModel();
        $gudang =  $gudangModel->findAll();
        dd($gudang);

        $data = [
            'title' => 'daftar barang',
            'gudang' => $gudang
        ];

        return view('gudang/index', $data);
    }
}
