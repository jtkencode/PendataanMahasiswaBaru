<?php

use Illuminate\Database\Seeder;

class AgamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agama')->insert([ 'agama' => 'Islam' ]);
        DB::table('agama')->insert([ 'agama' => 'Kristen Protestan' ]);
        DB::table('agama')->insert([ 'agama' => 'Kristen Katolik' ]);
        DB::table('agama')->insert([ 'agama' => 'Hindu' ]);
        DB::table('agama')->insert([ 'agama' => 'Buddha' ]);
        DB::table('agama')->insert([ 'agama' => 'Khonghucu' ]);
    }
}
