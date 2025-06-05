<?php

namespace Database\Seeders;

use App\Models\ItemModel;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = now();

        $items = [
            ['name' => 'Flaring tool', 'category_id' => 1, 'unit_of_measure' => 'sets',],
            ['name' => 'Swaging tool', 'category_id' => 1, 'unit_of_measure' => 'sets',],
            ['name' => 'Tube cutter', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Tube bender (lever type) 5/8', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Tube bender (lever type) 1/2', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Tube bender (lever type) 5/16', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Tube bender (lever type) 3/8', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Tube bender (lever type) 1/4', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Tube bender (spring type)', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Service cylinder, 2.5 kg Capacity', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Service cylinder, 10 kg Capacity', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Electrical pliers', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Pliers, long nose', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Pliers, diagonal', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Capillary tube cutter', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Screwdriver, flat', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Screwdriver, Philips', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Flat files, fine', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Allen wrench, metric', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Allen wrench, English', 'category_id' => 1, 'unit_of_measure' => 'sets',],
            ['name' => 'Adjustable wrench 8"', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Adjustable wrench 10"', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Open wrench, metric', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Open wrench, English', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Box wrench', 'category_id' => 1, 'unit_of_measure' => 'sets',],
            ['name' => 'Ratchet wrench (service valve)', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Vise grip, 8"', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Ballpein hammer, 8 oz', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Rubber mallet', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Hack saw, standard size', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Steel rule, metric & English, 12"', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Push rule, 15 meters', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'L-square, 12"', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Pinch-off tool', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Soldering iron, 100w, 220 volts', 'category_id' => 1, 'unit_of_measure' => 'pcs',],
            ['name' => 'Aviation snip, straight', 'category_id' => 1, 'unit_of_measure' => 'pcs',]
        ];

        // Add timestamps
        $items = array_map(function ($item) use ($now) {
            return array_merge($item, ['created_at' => $now, 'updated_at' => $now]);
        }, $items);

        ItemModel::insert($items);
    }
}
