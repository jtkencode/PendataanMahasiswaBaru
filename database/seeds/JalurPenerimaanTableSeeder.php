<?php

use App\JalurPenerimaan;
use App\TahunPenerimaan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class JalurPenerimaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jalur = new JalurPenerimaan;
        $jalur->tahun = TahunPenerimaan::where('tahun', date('Y'))->first()->tahun;
        $jalur->nama_jalur = "PMDK Utama - Akademik";
        $jalur->start_time = Carbon::create(2017, 5, 23, 7, 0, 0, 'Asia/Jakarta');
        $jalur->end_time = Carbon::create(2017, 5, 23, 17, 0, 0, 'Asia/Jakarta');
        $jalur->save();

        $jalur = new JalurPenerimaan;
        $jalur->tahun = TahunPenerimaan::where('tahun', date('Y'))->first()->tahun;
        $jalur->nama_jalur = "PMDK Utama - Bidik Misi";
        $jalur->start_time = Carbon::create(2017, 5, 23, 7, 0, 0, 'Asia/Jakarta');
        $jalur->end_time = Carbon::create(2017, 5, 23, 17, 0, 0, 'Asia/Jakarta');
        $jalur->save();
    }
}
