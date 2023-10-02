<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamDataPengajuanQrisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define a sample record to be seeded
        $data = [
            'kodePengajuanQRIS' => 'QRBG009898',
            'id_qris' => 123456789,
            'rekening' => '9876543210',
            'id_merchant' => 'M12345',
            'private_key1' => 'private_key1_value',
            'private_key2' => 'private_key2_value',
            'merchant_key' => 'merchant_key_value',
            'nmid' => 'nmid_value',
            'owner_name' => 'John Doe',
            'store_name' => 'Doe Store',
            'address' => '123 Main Street',
            'email' => 'john@example.com',
            'phone_number' => '123-456-7890',
            'postcode' => '12345',
            'longitude' => '123.456789',
            'latitude' => '12.345678',
            'ktp_number' => 'KTP123456789',
            'npwp_number' => 'NPWP987654321',
            'province_id' => 1,
            'city_id' => 1001,
            'merchant_type' => 1,
            'merchant_criteria' => 'Criteria Value',
            'merchant_category' => 'Category Value',
            'account_number' => '1234567890',
            'account_name' => 'Account Name',
            'bank_code' => 'BANK123',
            'bank_branch' => 'Branch Name',
            'url_callback' => 'https://example.com/callback',
            'doc_ktp_url' => 'https://example.com/docs/ktp.jpg',
            'doc_ktp_data' => 'KTP data',
            'doc_ktp_ext' => 'jpg',
            'doc_npwp_url' => 'https://example.com/docs/npwp.jpg',
            'doc_npwp_data' => 'NPWP data',
            'doc_npwp_ext' => 'jpg',
            'doc_selfie_url' => 'https://example.com/docs/selfie.jpg',
            'doc_selfie_data' => 'Selfie data',
            'doc_selfie_ext' => 'jpg',
            'doc_location_url' => 'https://example.com/docs/location.jpg',
            'doc_location_data' => 'Location data',
            'doc_location_ext' => 'jpg',
            'respond_time' => now(),
            'respond_note' => 'Response note',
            'respond_url_callback' => 'https://example.com/respond-callback',
            'respondby' => 'Responder Name',
            'respondip' => '192.168.1.1',
            'created' => now(),
            'createdby' => 'Creator Name',
            'createdip' => '192.168.0.1',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Insert the data into the table
        DB::table('exam_data_pengajuan_qris')->insert($data);
    }
}
