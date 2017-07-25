<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaDaftarUlang extends Model
{
    protected $table = 'mahasiswa_daftar_ulang';

    /* We use UUID */
    public $incrementing = false;
    use Uuids;

    public function programStudi()
    {
    	return $this->belongsTo('App\ProgramStudi', 'program_studi', 'kode_program_studi');
    }

    public function jalurPenerimaan()
    {
    	return $this->belongsTo('App\JalurPenerimaan', 'jalur_penerimaan');
    }

    public function agamaDetail()
    {
    	return $this->belongsTo('App\Agama', 'agama');
    }
}
