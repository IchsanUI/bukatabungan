<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanQRIS extends Model
{
    protected $table = 'exam_data_pengajuan_qris';

    protected $fillable = [
        'id_qris',
        'rekening',
        'id_merchant',
        'private_key1',
        'private_key2',
        'merchant_key',
        'nmid',
        'owner_name',
        'store_name',
        'address',
        'email',
        'phone_number',
        'postcode',
        'longitude',
        'latitude',
        'ktp_number',
        'npwp_number',
        'province_id',
        'city_id',
        'merchant_type',
        'merchant_criteria',
        'merchant_category',
        'account_number',
        'account_name',
        'bank_code',
        'bank_branch',
        'url_callback',
        'doc_ktp_url',
        'doc_ktp_data',
        'doc_ktp_ext',
        'doc_npwp_url',
        'doc_npwp_data',
        'doc_npwp_ext',
        'doc_selfie_url',
        'doc_selfie_data',
        'doc_selfie_ext',
        'doc_location_url',
        'doc_location_data',
        'doc_location_ext',
        'respond_time',
        'respond_note',
        'respond_url_callback',
        'respondby',
        'respondip',
        'created',
        'createdby',
        'createdip',
        'status',
    ];
}
