<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pekerjaan', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('kode', 10); // Kolom kode dengan maksimal panjang 10 karakter
            $table->string('jenis_pekerjaan'); // Kolom jenis_pekerjaan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_pekerjaan');
    }
};
