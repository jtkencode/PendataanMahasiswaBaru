<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaDiterimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_diterima', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_lengkap');
            $table->uuid('jalur_penerimaan');
            $table->uuid('id_daftar_ulang')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('jalur_penerimaan')->references('id')->on('jalur_penerimaan');
            $table->foreign('id_daftar_ulang')->references('id')->on('mahasiswa_daftar_ulang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_diterima');
    }
}
