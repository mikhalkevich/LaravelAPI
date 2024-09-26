<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'Название товара 1',
                    'description_short' => 'Короткое описание',
                    'description' => 'Полное описание',
                    'code' => '123',
                    'price' => '123',
                ],
                [
                    'name' => 'Название товара 2',
                    'description_short' => 'Короткое описание',
                    'description' => 'Полное описание 2',
                    'code' => '223',
                    'price' => '222',
                ],
                [
                    'name' => 'Название товара 3',
                    'description_short' => 'Короткое описание 3',
                    'description' => 'Полное описание 3',
                    'code' => '333',
                    'price' => '333',
                ]
            ]
        );
    }
}
