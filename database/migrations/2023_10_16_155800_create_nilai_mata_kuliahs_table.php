<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkademikTable extends Migration
{
    public function up()
    {
        Schema::create('akademik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('mata_kuliah');
            $table->float('nilai');
            $table->string('prestasi_akademik');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai_mata_kuliahs');
    }
}
