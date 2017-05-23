<?php

use App\TahunPenerimaan;
use Illuminate\Database\Seeder;

class TahunPenerimaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tahun = new TahunPenerimaan;
        $tahun->tahun = date('Y');
        $tahun->save();
    }
}
