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
        Schema::create('exam_data_pengajuan_qris', function (Blueprint $table) {
            $table->id();
            $table->string('kodePengajuanQRIS');
            $table->bigInteger('id_qris');
            $table->string('rekening');
            $table->string('id_merchant');
            $table->string('private_key1');
            $table->string('private_key2');
            $table->string('merchant_key');
            $table->string('nmid');
            $table->string('owner_name');
            $table->string('store_name');
            $table->string('address');
            $table->string('email');
            $table->string('phone_number');
            $table->string('postcode');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('ktp_number');
            $table->string('npwp_number');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->tinyInteger('merchant_type');
            $table->string('merchant_criteria');
            $table->string('merchant_category');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('bank_code');
            $table->string('bank_branch');
            $table->string('url_callback');
            $table->string('doc_ktp_url');
            $table->text('doc_ktp_data');
            $table->string('doc_ktp_ext');
            $table->string('doc_npwp_url');
            $table->text('doc_npwp_data');
            $table->string('doc_npwp_ext');
            $table->string('doc_selfie_url');
            $table->text('doc_selfie_data');
            $table->string('doc_selfie_ext');
            $table->string('doc_location_url');
            $table->text('doc_location_data');
            $table->string('doc_location_ext');
            $table->datetime('respond_time')->nullable();
            $table->text('respond_note')->nullable();
            $table->string('respond_url_callback')->nullable();
            $table->string('respondby');
            $table->string('respondip');
            $table->datetime('created');
            $table->string('createdby');
            $table->string('createdip');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('exam_data_pengajuan_qris');
    }
};
