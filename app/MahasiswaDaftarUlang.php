<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaDaftarUlang extends Model
{
    protected $table = 'mahasiswa_daftar_ulang';

    /* We use UUID */
    public $incrementing = false;
    use Uuids;
}
