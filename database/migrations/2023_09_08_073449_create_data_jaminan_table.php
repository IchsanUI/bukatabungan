<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataJaminanTable extends Migration
{
    public function up()
    {
        Schema::create('data_jaminan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jaminan');
            $table->string('nama_jaminan');
            // Tambahkan kolom lain sesuai kebutuhan Anda
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_jaminan');
    }
}
