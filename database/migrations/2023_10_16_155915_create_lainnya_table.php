<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLainnyaTable extends Migration
{
    public function up()
    {
        Schema::create('lainnya', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('riwayat_penyakit');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('kontak_orangtua');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lainnya');
    }
}
