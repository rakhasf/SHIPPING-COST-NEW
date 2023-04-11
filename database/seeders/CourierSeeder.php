<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courier;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courier::insert([
            [
                'code' => 'jne',
                'title' => 'Jalur Nugraha Ekakurir (JNE)'
            ],
            [
                'code' => 'pos',
                'title' => 'Post Indonesia'
            ],
            [
                'code' => 'tiki',
                'title' => 'Citra Van Titipan Kilat'
            ]
        ]);
    }
}
