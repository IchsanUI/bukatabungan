<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataJaminanSeeder extends Seeder
{
    public function run()
    {
        // Data yang akan diisi ke dalam tabel "data_jaminan"
        $data = [
            [
                'kode_jaminan' => 'kd-0001',
                'nama_jaminan' => 'BPKB Motor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jaminan' => 'kd-0002',
                'nama_jaminan' => 'BPKB Mobil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jaminan' => 'kd-0003',
                'nama_jaminan' => 'Sertifikat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_jaminan' => 'kd-0004',
                'nama_jaminan' => 'SK Pegawai Pemerintah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain jika diperlukan
        ];

        // Menyimpan data ke dalam tabel "data_jaminan"
        DB::table('data_jaminan')->insert($data);
    }
}
