<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaDaftarUlangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_daftar_ulang', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->char('program_studi', 5);
            $table->uuid('jalur_penerimaan');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->integer('agama')->unsigned();
            $table->text('alamat_asal');
            $table->text('alamat_sekarang');
            $table->string('asal_sekolah');
            $table->string('jurusan_asal');
            $table->text('cita_cita');
            $table->text('hobi');
            $table->text('motivasi_masuk');
            $table->text('moto_hidup');
            $table->text('deskripsi_diri');
            $table->timestamps();
            $table->timestamp('synced_at')->nullable();

            $table->primary('id');
            $table->foreign('program_studi')->references('kode_program_studi')->on('program_studi');
            $table->foreign('jalur_penerimaan')->references('id')->on('jalur_penerimaan');
            $table->foreign('agama')->references('id')->on('agama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_daftar_ulang');
    }
}
