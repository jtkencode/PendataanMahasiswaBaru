<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMinatBakatField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_daftar_ulang', function (Blueprint $table) {
            $table->text('minat_bakat')->after('deskripsi_diri')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_daftar_ulang', function (Blueprint $table) {
            $table->dropColumn('minat_bakat');
        });
    }
}
