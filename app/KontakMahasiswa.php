<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontakMahasiswa extends Model
{
    protected $table = 'kontak_mahasiswa';

    public $incrementing = false;

    public function mahasiswa()
    {
    	return $this->belongsTo('App\MahasiswaDaftarUlang', 'mahasiswa_daftar_ulang', 'id');
    }
}
