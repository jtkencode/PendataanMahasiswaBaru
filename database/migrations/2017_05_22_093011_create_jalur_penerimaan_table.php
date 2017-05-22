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
            $table->strng('nama_jalur');
            $table->char('tahun', 4);
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->timestamps();

            $table->primary('id');
            $table->unique(['tahun', 'nama_jalur']);
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
