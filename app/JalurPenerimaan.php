<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JalurPenerimaan extends Model
{
    protected $table = 'jalur_penerimaan';

    /* We use UUID */
    public $incrementing = false;
}
