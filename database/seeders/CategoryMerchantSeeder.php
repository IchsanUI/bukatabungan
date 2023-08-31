<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['kode' => '4722', 'category' => 'Agent PPOB & Travel'],
            ['kode' => '4789', 'category' => 'Transportasi'],
            ['kode' => '4812', 'category' => 'Counter Pulsa & Accessories HP'],
            ['kode' => '4816', 'category' => 'Computer Network/Information Services and other Online Services'],
            ['kode' => '5311', 'category' => 'Mini Market'],
            ['kode' => '5499', 'category' => 'Kedai & Warung Makan'],
            ['kode' => '5541', 'category' => 'SPBU'],
            ['kode' => '5699', 'category' => 'Fashion & Accessories'],
            ['kode' => '5812', 'category' => 'Cafe & Resto'],
            ['kode' => '5814', 'category' => 'Quick Payment Service-Fast Food Restaurants'],
            ['kode' => '5821', 'category' => 'Lainnya'],
            ['kode' => '5992', 'category' => 'Toko Bunga'],
            ['kode' => '5999', 'category' => 'Toko Retail'],
            ['kode' => '7011', 'category' => 'Hotel & Penginapan'],
            ['kode' => '7210', 'category' => 'Laundry & Jasa Kebersihan'],
            ['kode' => '7230', 'category' => 'Barbershop & Salon'],
            ['kode' => '7699', 'category' => 'Bengkel & Reparasi'],
            ['kode' => '7991', 'category' => 'Wisata & Hiburan'],
            ['kode' => '8099', 'category' => 'Layanan Kesehatan'],
            ['kode' => '8299', 'category' => 'Pendidikan'],
            ['kode' => '8398', 'category' => 'Sosial & ZIS'],
            ['kode' => '8602', 'category' => 'Layanan Umum'],
            ['kode' => '9311', 'category' => 'Layanan Pemerintahan'],
            ['kode' => '9399', 'category' => 'Bansos'],
            // Tambahkan data lainnya
        ];
        DB::table('category_merchants')->insert($categories);
    }
}
