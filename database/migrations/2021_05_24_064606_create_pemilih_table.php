<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilih', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('no_kk');
            $table->string('nama');
            $table->string('tmp_lahir');
            $table->string('tgl_lahir');
            $table->string('status_kawin');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->SmallInteger('kd_tps');
            $table->smallInteger('kd_desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemilih');
    }
}
