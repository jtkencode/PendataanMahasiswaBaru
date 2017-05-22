<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJalurPenerimaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jalur_penerimaan', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('tahun', 4);
            $table->string('nama_jalur');
            $table->timestamp('start_time')->useCurrent();
            $table->timestamp('end_time')->useCurrent();
            $table->timestamps();

            $table->primary('id');
            $table->unique(['tahun', 'nama_jalur']);
            $table->foreign('tahun')->references('tahun')->on('tahun_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jalur_penerimaan');
    }
}
