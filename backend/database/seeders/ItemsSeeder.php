<?php

namespace Database\Seeders;

use App\Models\ItemModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Flaring tool', 'category_id' => 1, 'unit_of_measure' => 'sets', 'acquisition_date' => now()],
            ['name' => 'Swaging tool', 'category_id' => 1, 'unit_of_measure' => 'sets', 'acquisition_date' => now()],
            ['name' => 'Tube cutter', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Tube bender (lever type) 5/8', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Tube bender (lever type) 1/2', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Tube bender (lever type) 5/16', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Tube bender (lever type) 3/8', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Tube bender (lever type) 1/4', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Tube bender (spring type)', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Service cylinder, 2.5 kg Capacity', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Service cylinder, 10 kg Capacity', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Electrical pliers', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Pliers, long nose', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Pliers, diagonal', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Capillary tube cutter', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Screwdriver, flat', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Screwdriver, Philips', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Flat files, fine', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Allen wrench, metric', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Allen wrench, English', 'category_id' => 1, 'unit_of_measure' => 'sets', 'acquisition_date' => now()],
            ['name' => 'Adjustable wrench 8"', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Adjustable wrench 10"', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Open wrench, metric', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Open wrench, English', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Box wrench', 'category_id' => 1, 'unit_of_measure' => 'sets', 'acquisition_date' => now()],
            ['name' => 'Ratchet wrench (service valve)', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Vise grip, 8"', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Ballpein hammer, 8 oz', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Rubber mallet', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Hack saw, standard size', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Steel rule, metric & English, 12"', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Push rule, 15 meters', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'L-square, 12"', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Pinch-off tool', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Soldering iron, 100w, 220 volts', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()],
            ['name' => 'Aviation snip, straight', 'category_id' => 1, 'unit_of_measure' => 'pcs', 'acquisition_date' => now()]
        ];

        foreach ($items as $item) {
            ItemModel::create($item);
        }
    }
}
