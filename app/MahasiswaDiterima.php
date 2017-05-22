<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaDiterima extends Model
{
    protected $table = 'mahasiswa_diterima';

    /* We use UUID */
    public $incrementing = false;
    use Uuids;
}
