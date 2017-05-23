<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontakMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak_mahasiswa', function (Blueprint $table) {
            $table->uuid('mahasiswa_daftar_ulang');
            $table->string('jenis_kontak');
            $table->string('detil_kontak');
            $table->timestamps();

            $table->primary(['mahasiswa_daftar_ulang', 'jenis_kontak']);
            $table->foreign('mahasiswa_daftar_ulang')->references('id')->on('mahasiswa_daftar_ulang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontak_mahasiswa');
    }
}
