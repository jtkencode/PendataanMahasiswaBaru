<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgamaTableSeeder::class);
        $this->call(ProgramStudiTableSeeder::class);
        $this->call(TahunPenerimaanTableSeeder::class);
        $this->call(JalurPenerimaanTableSeeder::class);
    }
}
