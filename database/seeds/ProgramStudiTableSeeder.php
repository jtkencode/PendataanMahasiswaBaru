<?php

use App\ProgramStudi;
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
        $listProgramStudi = [
            "D3-TI" => "Diploma III Teknik Informatika",
            "D4-TI" => "Sarjana Terapan Teknik Informatika"
        ];

        foreach ($listProgramStudi as $kode => $prodi)
        {
            $object = new ProgramStudi;
            $object->kode_program_studi = $kode;
            $object->program_studi = $prodi;
            $object->save();
        }
    }
}
