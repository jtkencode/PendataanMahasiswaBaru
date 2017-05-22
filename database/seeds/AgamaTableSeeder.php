<?php

use App\Agama;
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
        $listAgama = [
            "Islam",
            "Kristen Protestan",
            "Kristen Katolik",
            "Hindu",
            "Buddha",
            "Khonghucu"
        ];

        foreach ($listAgama as $agama)
        {
            $object = new Agama;
            $object->agama = $agama;
            $object->save();
        }
    }
}
