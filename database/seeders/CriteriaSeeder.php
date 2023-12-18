<?php

namespace Database\Seeders;

use App\Models\Criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $criteria = [
            [
                'name' => 'Kualitas Produk',
                'type' => 'Benefit',
                'weight' => 0.05,
            ],
            [
                'name' => 'Waktu Pengiriman',
                'type' => 'Benefit',
                'weight' => 0.1,
            ],
            [
                'name' => 'Layanan',
                'type' => 'Benefit',
                'weight' => 0.15,
            ],
            [
                'name' => 'Harga',
                'type' => 'Cost',
                'weight' => 0.05,
            ],
            [
                'name' => 'Biaya Pengiriman',
                'type' => 'Cost',
                'weight' => 0.05,
            ],
            [
                'name' => 'Biaya Penyimpanan',
                'type' => 'Cost',
                'weight' => 0.25,
            ],
            [
                'name' => 'Inovasi Produk',
                'type' => 'Benefit',
                'weight' => 0.15,
            ],
            [
                'name' => 'Fleksibilitas Pemesanan',
                'type' => 'Benefit',
                'weight' => 0.2,
            ],
        ];

        Criteria::insert($criteria);
    }
}
