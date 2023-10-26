<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePribadiTable extends Migration
{
    public function up()
    {
        Schema::create('pribadi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('NIM')->unique();
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}