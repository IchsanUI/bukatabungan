<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KantorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kantors')->insert([
            [
                'office_name' => 'Kantor Pusat',
                'address' => 'Jl. Basuki Rahmat No. 18, Gresik 61114, Jawa Timur.',
                'office_pic' => "{{ asset('img/img_kas_bunga.png') }}",
                'decs' => 'Deskripsi Kantor A',
                'maps_link' => 'https://goo.gl/maps/BHTEivVksNVBYeqc7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'office_name' => 'Kantor Bunga',
                'address' => 'Jl. Raya Bungah No.51, Bungah, Gresik 61152, Jawa Timur',
                'office_pic' => "{{ asset('img/img_kas_bunga.png') }}",
                'decs' => 'Deskripsi Kantor B',
                'maps_link' => 'https://goo.gl/maps/k9S9J1DX3w9HJJP36',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'office_name' => 'Kantor Menganti',
                'address' => 'Jl. Raya Menganti Karangturi No.200, Menganti, Gresik 61174, Jawa Timur',
                'office_pic' =>  "{{ asset('img/img_kas_menganti.png') }}",
                'decs' => 'Deskripsi Kantor B',
                'maps_link' => 'https://goo.gl/maps/se8Hd2fRdmPnJvY47',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
