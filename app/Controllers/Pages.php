<?php

namespace App\Controllers;

use App\Models\Anggota;
use App\Models\ListModel;
use App\Models\Pegawai;

class Pages extends BaseController
{
    public function index()
    {
        $listModel = new ListModel();
        $list = $listModel ->findAll();
        $data=[
            'title'=>'Dashboard',
            'list'=>$list
        ];
        return view('pages/dashboard',$data);
    }
    public function anggota()
    {
        $anggotaModel = new Anggota();
        $anggota = $anggotaModel ->findAll();
        $data=[
            'title'=>'Dashboard',
            'anggota'=>$anggota
        ];
        return view('pages/anggota',$data);
    }
    public function pegawai()
    {
        $pegawaiModel = new Pegawai();
        $pegawai = $pegawaiModel ->findAll();
        $data=[
            'title'=>'Dashboard',
            'pegawai'=>$pegawai
        ];
        return view('pages/pegawai',$data);
    }
}

