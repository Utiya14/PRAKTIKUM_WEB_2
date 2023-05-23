<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    
    public function index()
    {
        $mahasiswa = new MahasiswaModel();
        return view('index', [
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim(),
            "asal_prodi" => $mahasiswa->getAsalPrody(),
            "hoby" => $mahasiswa->getHoby(),
            "skill" => $mahasiswa-> getSkill()

            
        ]);
    }


    public function profil()
    {
        $mahasiswa = new MahasiswaModel();
        return view('profil', [
            "nama" => $mahasiswa->getNama(),
            "nim" => $mahasiswa->getNim(),
            "asal_prodi" => $mahasiswa->getAsalPrody(),
            "hoby" => $mahasiswa->getHoby(),
            "skill" => $mahasiswa-> getSkill(),
        ]);
    }
}
