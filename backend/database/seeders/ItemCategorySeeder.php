<?php

namespace Database\Seeders;

use App\Models\ItemCategoryModel;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = now();

        $categories = [
            ['category_name' => 'Tools'],
            ['category_name' => 'Equipment'],
            ['category_name' => 'Personal Protective Equipment'],
            ['category_name' => 'Materials']
        ];

        // Add timestamps
        $categories = array_map(function ($category) use ($now) {
            return array_merge($category, ['created_at' => $now, 'updated_at' => $now]);
        }, $categories);

        ItemCategoryModel::insert($categories);
    }
}
