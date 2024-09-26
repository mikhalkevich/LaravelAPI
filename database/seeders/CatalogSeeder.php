<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogs')->insert([
                [
                    'name' => 'Giant',
                    'parent_id' => 4,
                ],
                [
                    'name' => 'Treck',
                    'parent_id' => 4,
                ],
                [
                    'name' => 'Aist',
                    'parent_id' => 4,
                ],
                [
                    'name' => 'Аист',
                    'parent_id' => 4,
                ],
            ]

        );
    }
}
