<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_items')->insert([
            ['name' => 'Flaring tool', 'category_id' => 1, 'unit' => 'sets', 'acquisition_date' => null],
            ['name' => 'Swaging tool', 'category_id' => 1, 'unit' => 'sets', 'acquisition_date' => null],
            ['name' => 'Tube cutter', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Tube bender (lever type) 5/8', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Tube bender (lever type) 1/2', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Tube bender (lever type) 5/16', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Tube bender (lever type) 3/8', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Tube bender (lever type) 1/4', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Tube bender (spring type)', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Service cylinder, 2.5 kg Capacity', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Service cylinder, 10 kg Capacity', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Electrical pliers', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Pliers, long nose', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Pliers, diagonal', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Capillary tube cutter', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Screwdriver, flat', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Screwdriver, Philips', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Flat files, fine', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Allen wrench, metric', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Allen wrench, English', 'category_id' => 1, 'unit' => 'sets', 'acquisition_date' => null],
            ['name' => 'Adjustable wrench 8"', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Adjustable wrench 10"', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Open wrench, metric', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Open wrench, English', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Box wrench', 'category_id' => 1, 'unit' => 'sets', 'acquisition_date' => null],
            ['name' => 'Ratchet wrench (service valve)', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Vise grip, 8"', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Ballpein hammer, 8 oz', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Rubber mallet', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Hack saw, standard size', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Steel rule, metric & English, 12"', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Push rule, 15 meters', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'L-square, 12"', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Pinch-off tool', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Soldering iron, 100w, 220 volts', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
            ['name' => 'Aviation snip, straight', 'category_id' => 1, 'unit' => 'pcs', 'acquisition_date' => null],
        ]);
    }
}
