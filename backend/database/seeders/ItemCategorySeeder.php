<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_item_category')->insert([
            ['category_name' => 'Tools'],
            ['category_name' => 'Equipment'],
            ['category_name' => 'Personal Protective Equipment'],
            ['category_name' => 'Materials']
        ]);
    }
}
