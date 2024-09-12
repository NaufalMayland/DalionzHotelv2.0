<?php

namespace Database\Seeders;

use App\Models\TipeKamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'tipe_kamar' => 'Standar',
                'harga' => '1000000',
                'image' => 'image.png',
            ],
            [
                'tipe_kamar' => 'Deluxe',
                'harga' => '1500000',
                'image' => 'image.png',
            ]
        ];

        TipeKamar::insert($userdata);
    }
}
