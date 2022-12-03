<?php

namespace App\Controllers;

use App\Models\Anggota;
use App\Models\ListModel;
use App\Models\Pegawai;
use App\Models\SimpananPokok;
use App\Models\SimpananSukarela;
use App\Models\SimpananWajib;

class Pages extends BaseController
{
    public function index()
    {
        $listModel = new ListModel();
        $list = $listModel ->findAll();
        $anggotaModel = new Anggota();
        $anggota = $anggotaModel ->findAll();
        $pegawaiModel = new Pegawai();
        $pegawai = $pegawaiModel ->findAll();
        $data=[
            'title'=>'Dashboard',
            'active'=> 'active',
            'list'=>$list,
            'pegawai'=>$pegawai,
            'anggota'=>$anggota
        ];
        return view('pages/dashboard',$data);
    }
    public function anggota()
    {
        $anggotaModel = new Anggota();
        $anggota = $anggotaModel ->findAll();
        $data=[
            'title'=>'Anggota',
            'active'=> 'active',
            'anggota'=>$anggota
        ];
        return view('pages/anggota',$data);
    }
    public function pegawai()
    {
        $pegawaiModel = new Pegawai();
        $pegawai = $pegawaiModel ->findAll();
        $data=[
            'title'=>'Pegawai',
            'pegawai'=>$pegawai
        ];
        return view('pages/pegawai',$data);
    }
    public function simpanan_pokok()
    {
        $pokokModel = new SimpananPokok();
        $pokok = $pokokModel ->findAll();
        $data=[
            'title'=>'Simpanan Pokok',
            'pokok'=>$pokok
        ];
        return view('pages/simpanan_pokok',$data);
    }
    public function simpanan_wajib()
    {
        $wajibModel = new SimpananWajib();
        $wajib = $wajibModel ->findAll();
        $data=[
            'title'=>'Simpanan Wajib',
            'wajib'=>$wajib
        ];
        return view('pages/simpanan_wajib',$data);
    }
    public function simpanan_sukarela()
    {
        $sukarelaModel = new SimpananSukarela();
        $sukarela = $sukarelaModel ->findAll();
        $data=[
            'title'=>'Simpanan Sukarela',
            'sukarela'=>$sukarela
        ];
        return view('pages/simpanan_sukarela',$data);
    }
    public function tambah_list()
    {
        $data=[
            'title'=>'Tambah To Do List',
        ];
        return view('tambah_list',$data);
    }
    public function save_list()
    {
         
        //define validation
        $validation = $this->validate([
            'desk' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kegiatan'
                ]
            ],
            'deadline'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Deadline atau Tanggal Dilaksanakan'
                ]
            ],
            'type'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Type'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('tambah_list', [
                'validation' => $this->validator,
                'title'=>'Tambah To Do List',
            ]);

        } else {

             //model initialize
            $listModel = new ListModel();
            
            //insert data into database
            $listModel->save([
                'desk'   => $this->request->getVar('desk'),
                'deadline' => $this->request->getVar('deadline'),
                'type' => $this->request->getVar('type'),
            ]);

            return redirect()->to(base_url('Pages'));
        }
    }
    public function tambah_anggota()
    {
        $data=[
            'title'=>'Tambah Anggota',
        ];
        return view('tambah_anggota',$data);
    }
    public function save_anggota()
    {
         
        //define validation
        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama'
                ]
            ],
            'jenis_kelamin'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jenis Kelamin'
                ]
            ],
            'alamat'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Alamat'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('tambah_anggota', [
                'validation' => $this->validator,
                'title'=>'Tambah Anggota',
            ]);

        } else {

             //model initialize
            $anggotaModel = new Anggota();
            
            //insert data into database
            $anggotaModel->save([
                'nama'   => $this->request->getVar('nama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'alamat' => $this->request->getVar('alamat'),
            ]);

            return redirect()->to(base_url('Pages'));
        }
    }
    public function tambah_pegawai()
    {
        $data=[
            'title'=>'Tambah Pegawai',
        ];
        return view('tambah_pegawai',$data);
    }
    public function save_pegawai()
    {
         
        //define validation
        $validation = $this->validate([
            'nama' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama'
                ]
            ],
            'nik'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan NIK'
                ]
            ],
            'alamat'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan alamat'
                ]
            ],
            'nohp'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan nohp'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('tambah_pegawai', [
                'validation' => $this->validator,
                'title'=>'Tambah Pegawai',
            ]);

        } else {

             //model initialize
            $pegawaiModel = new Pegawai();
            
            //insert data into database
            $pegawaiModel->save([
                'nama'   => $this->request->getVar('nama'),
                'nik' => $this->request->getVar('nik'),
                'alamat' => $this->request->getVar('alamat'),
                'nohp' => $this->request->getVar('nohp'),
            ]);

            return redirect()->to(base_url('Pages'));
        }
    }
    public function tambah_pokok()
    {
        $data=[
            'title'=>'Tambah Simpanan Pokok',
        ];
        return view('tambah_pokok',$data);
    }
    public function save_pokok()
    {
         
        //define validation
        $validation = $this->validate([
            'id_anggota' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Id'
                ]
            ],
            'jumlah'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jumlah'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('tambah_pokok', [
                'validation' => $this->validator,
                'title'=>'Tambah Simpanan Pokok',
            ]);

        } else {

             //model initialize
            $SimpananPokok = new SimpananPokok();
            
            //insert data into database
            $SimpananPokok->save([
                'id_anggota'   => $this->request->getVar('id_anggota'),
                'jumlah' => $this->request->getVar('jumlah'),
            ]);

            return redirect()->to(base_url('Pages'));
        }
    }
    public function tambah_sukarela()
    {
        $data=[
            'title'=>'Tambah Simpanan Sukarela',
        ];
        return view('tambah_sukarela',$data);
    }
    public function save_sukarela()
    {
         
        //define validation
        $validation = $this->validate([
            'id_anggota' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan ID'
                ]
            ],
            'jumlah'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jumlah'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('tambah_sukarela', [
                'validation' => $this->validator,
                'title'=>'Tambah Simpanan Sukarela',
            ]);

        } else {

             //model initialize
            $SimpananSukarela = new SimpananSukarela();
            
            //insert data into database
            $SimpananSukarela->save([
                'id_anggota'   => $this->request->getVar('id_anggota'),
                'jumlah' => $this->request->getVar('jumlah'),
            ]);

            return redirect()->to(base_url('Pages'));
        }
    }
    public function tambah_wajib()
    {
        $data=[
            'title'=>'Tambah Simpanan Wajib',
        ];
        return view('tambah_wajib',$data);
    }
    public function save_wajib()
    {
         
        //define validation
        $validation = $this->validate([
            'id_anggota' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Id'
                ]
            ],
            'jumlah'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Jumlah'
                ]
            ],
        ]);

        if(!$validation) {

            //render view with error validation message
            return view('tambah_wajib', [
                'validation' => $this->validator,
                'title'=>'Tambah Simpanan Wajib',
            ]);

        } else {

             //model initialize
            $SimpananWajib = new SimpananWajib();
            
            //insert data into database
            $SimpananWajib->save([
                'id_anggota'   => $this->request->getVar('id_anggota'),
                'jumlah' => $this->request->getVar('jumlah'),
            ]);

            return redirect()->to(base_url('Pages'));
        }
    }
}

