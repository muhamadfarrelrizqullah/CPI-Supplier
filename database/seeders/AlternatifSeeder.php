<?php

namespace Database\Seeders;

use App\Models\Alternatif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $alternatif = [
            [
                'name' => 'Budi Santoso',

            ],
            [
                'name' => 'Dewi Kusuma',

            ],
            [
                'name' => 'Aditya Pratama',

            ],
            [
                'name' => 'Siti Nurhaliza',

            ],
            [
                'name' => 'Agung Wijaya',

            ],
            [
                'name' => 'Ratna Dewi',

            ],
            [
                'name' => 'Irfan Maulana',

            ],
            [
                'name' => 'Anisa Fitriani',

            ],
            [
                'name' => 'Dwi Setiawan',

            ],
            [
                'name' => 'Rini Susanti',

            ],
            [
                'name' => 'Fajar Nugroho',

            ],
            [
                'name' => 'Maya Puspita',

            ],
            [
                'name' => 'Dito Saputra',

            ],
            [
                'name' => 'Rina Indah',

            ],
            [
                'name' => 'Rizki Ramadhan',

            ],
            [
                'name' => 'Nia Cahyani',

            ],
            [
                'name' => 'Arya Putra',

            ],
            [
                'name' => 'Ani Rahayu',

            ],
            [
                'name' => 'Denny Kurniawan',

            ],
            [
                'name' => 'Lina Sari',

            ],
            [
                'name' => 'Fahmi Fauzi',

            ],
            [
                'name' => 'Yuni Hidayati',

            ],
            [
                'name' => 'Rizal Firmansyah',

            ],
            [
                'name' => 'Nita Permata',

            ],
            [
                'name' => 'Ahmad Syahputra',

            ],
            [
                'name' => 'Lia Indriani',

            ],
            [
                'name' => 'Arifin Siregar',

            ],
            [
                'name' => 'Novi Anggraini',

            ],
            [
                'name' => 'Yusuf Rahman',

            ],
            [
                'name' => 'Putri Handayani',

            ],
        ];

        Alternatif::insert($alternatif);
    }
}
