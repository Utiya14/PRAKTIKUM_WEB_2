<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $nama = "Muhammad Utiya Raihan";
    protected $foto1 = "Pas Foto (biru).jpeg";
    protected $NIM = "2110817310004";
    protected $asal_prodi = "Teknologi Informasi";
    protected $hoby = "Badminton sambil main Game Online";
    protected $skill = "Public Speaking, HTML, & CSS";
    
    public function getNama()
    {
        return $this->nama;
    }

    public function getFoto1()
    {
        return $this->foto1;
    }

    public function getNim()
    {
        return $this->NIM;
    }

    public function getAsalPrody() {
        return $this->asal_prodi;
    }

    public function getHoby()
    {
        return $this->hoby;
    }

    public function getSkill() {
        return $this->skill;
    }
}
