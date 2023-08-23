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
        Schema::create('kantors', function (Blueprint $table) {
    $table->id();
    $table->string('office_name');
    $table->string('address');
    $table->string('office_pic'); // Kolom untuk nama file gambar kantor
    $table->string('decs'); // Kolom untuk nama file gambar kantor
    $table->string('maps_link'); // Kolom untuk garis lintang
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
        Schema::dropIfExists('kantors');
    }
};
