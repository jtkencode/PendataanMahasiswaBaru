<?php

use Illuminate\Database\Seeder;

class ProgramStudiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program_studi')->insert([ 'kode_program_studi' => 'D3-TI', 'program_studi' => 'Diploma III Teknik Informatika' ]);
        DB::table('program_studi')->insert([ 'kode_program_studi' => 'D4-TI', 'program_studi' => 'Sarjana Terapan Teknik Informatika' ]);
    }
}
