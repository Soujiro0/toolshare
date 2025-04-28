<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemUnitsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_item_units')->insert([
            // Flaring tool (10 units)
            ['item_id' => 1, 'property_no' => '1-001', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-002', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-003', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-004', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-005', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-006', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-007', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-008', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-009', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 1, 'property_no' => '1-010', 'brand' => 'RIDGID',         'model' => '345-DL', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Swaging tool (10 units)
            ['item_id' => 2, 'property_no' => '2-001', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-002', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-003', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-004', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-005', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-006', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-007', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-008', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-009', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 2, 'property_no' => '2-010', 'brand' => 'Yellow Jacket',  'model' => '60407', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube cutter (10 units)
            ['item_id' => 3, 'property_no' => '3-001', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-002', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-003', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-004', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-005', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-006', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-007', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-008', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-009', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 3, 'property_no' => '3-010', 'brand' => 'Milwaukee',     'model' => '48-22-4253', 'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube bender (lever type) 5/8 (3 units)
            ['item_id' => 4, 'property_no' => '4-001', 'brand' => 'RIDGID',         'model' => '456',     'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 4, 'property_no' => '4-002', 'brand' => 'RIDGID',         'model' => '456',     'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 4, 'property_no' => '4-003', 'brand' => 'RIDGID',         'model' => '456',     'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube bender (lever type) 1/2 (3 units)
            ['item_id' => 5, 'property_no' => '5-001', 'brand' => 'Klein Tools',    'model' => '89030',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 5, 'property_no' => '5-002', 'brand' => 'Klein Tools',    'model' => '89030',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 5, 'property_no' => '5-003', 'brand' => 'Klein Tools',    'model' => '89030',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube bender (lever type) 5/16 (3 units)
            ['item_id' => 6, 'property_no' => '6-001', 'brand' => 'Imperial',       'model' => '370-FH',  'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 6, 'property_no' => '6-002', 'brand' => 'Imperial',       'model' => '370-FH',  'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 6, 'property_no' => '6-003', 'brand' => 'Imperial',       'model' => '370-FH',  'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube bender (lever type) 3/8 (3 units)
            ['item_id' => 7, 'property_no' => '7-001', 'brand' => 'RIDGID',         'model' => '38048',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 7, 'property_no' => '7-002', 'brand' => 'RIDGID',         'model' => '38048',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 7, 'property_no' => '7-003', 'brand' => 'RIDGID',         'model' => '38048',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube bender (lever type) 1/4 (3 units)
            ['item_id' => 8, 'property_no' => '8-001', 'brand' => 'Klein Tools',    'model' => '89020',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 8, 'property_no' => '8-002', 'brand' => 'Klein Tools',    'model' => '89020',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 8, 'property_no' => '8-003', 'brand' => 'Klein Tools',    'model' => '89020',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Tube bender (spring type) (3 units)
            ['item_id' => 9, 'property_no' => '9-001', 'brand' => 'General Tools',  'model' => '1271D',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 9, 'property_no' => '9-002', 'brand' => 'General Tools',  'model' => '1271D',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 9, 'property_no' => '9-003', 'brand' => 'General Tools',  'model' => '1271D',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Service cylinder, 2.5 kg Capacity (2 units)
            ['item_id' => 10, 'property_no' => '10-001', 'brand' => 'Robinair',      'model' => '18191A',  'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 10, 'property_no' => '10-002', 'brand' => 'Robinair',      'model' => '18191A',  'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Service cylinder, 10 kg Capacity (2 units)
            ['item_id' => 11, 'property_no' => '11-001', 'brand' => 'Yellow Jacket', 'model' => '14710',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 11, 'property_no' => '11-002', 'brand' => 'Yellow Jacket', 'model' => '14710',   'specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // Electrical pliers (10 units)
            ['item_id' => 12, 'property_no' => '12-001', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-002', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-003', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-004', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-005', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-006', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-007', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-008', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-009', 'brand' => 'Klein Tools',  'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],
            ['item_id' => 12, 'property_no' => '12-010', 'brand' => 'Klein Tools', 'model' => 'D213-9NE','specification' => null, 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => null],

            // The following entries include a valid date_acquired value ('2025-04-07')
            // For item_id 13 to 36 (lots of units) and their respective property numbers
            // (You can adjust the item_id and property_no values as needed)
            // Item_id 13 (5 units)
            ['item_id' => 13, 'property_no' => '13-001', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 13, 'property_no' => '13-002', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 13, 'property_no' => '13-003', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 13, 'property_no' => '13-004', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 13, 'property_no' => '13-005', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 14 (5 units)
            ['item_id' => 14, 'property_no' => '14-001', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 14, 'property_no' => '14-002', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 14, 'property_no' => '14-003', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 14, 'property_no' => '14-004', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 14, 'property_no' => '14-005', 'brand' => 'Generic',  'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 15 (5 units)
            ['item_id' => 15, 'property_no' => '15-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 15, 'property_no' => '15-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 15, 'property_no' => '15-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 15, 'property_no' => '15-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 15, 'property_no' => '15-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 16 (5 units)
            ['item_id' => 16, 'property_no' => '16-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 16, 'property_no' => '16-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 16, 'property_no' => '16-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 16, 'property_no' => '16-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 16, 'property_no' => '16-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 17 (5 units)
            ['item_id' => 17, 'property_no' => '17-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 17, 'property_no' => '17-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 17, 'property_no' => '17-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 17, 'property_no' => '17-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 17, 'property_no' => '17-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 18 (5 units)
            ['item_id' => 18, 'property_no' => '18-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 18, 'property_no' => '18-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 18, 'property_no' => '18-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 18, 'property_no' => '18-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 18, 'property_no' => '18-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 19 (5 units)
            ['item_id' => 19, 'property_no' => '19-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 19, 'property_no' => '19-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 19, 'property_no' => '19-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 19, 'property_no' => '19-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 19, 'property_no' => '19-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 20 (5 units)
            ['item_id' => 20, 'property_no' => '20-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 20, 'property_no' => '20-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 20, 'property_no' => '20-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 20, 'property_no' => '20-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 20, 'property_no' => '20-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 21 (5 units)
            ['item_id' => 21, 'property_no' => '21-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 21, 'property_no' => '21-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 21, 'property_no' => '21-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 21, 'property_no' => '21-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 21, 'property_no' => '21-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 22 (5 units)
            ['item_id' => 22, 'property_no' => '22-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 22, 'property_no' => '22-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 22, 'property_no' => '22-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 22, 'property_no' => '22-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 22, 'property_no' => '22-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 23 (5 units)
            ['item_id' => 23, 'property_no' => '23-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 23, 'property_no' => '23-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 23, 'property_no' => '23-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 23, 'property_no' => '23-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 23, 'property_no' => '23-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 24 (5 units)
            ['item_id' => 24, 'property_no' => '24-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 24, 'property_no' => '24-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 24, 'property_no' => '24-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 24, 'property_no' => '24-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 24, 'property_no' => '24-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 25 (5 units)
            ['item_id' => 25, 'property_no' => '25-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 25, 'property_no' => '25-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 25, 'property_no' => '25-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 25, 'property_no' => '25-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 25, 'property_no' => '25-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 26 (5 units)
            ['item_id' => 26, 'property_no' => '26-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 26, 'property_no' => '26-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 26, 'property_no' => '26-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 26, 'property_no' => '26-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 26, 'property_no' => '26-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 27 (5 units)
            ['item_id' => 27, 'property_no' => '27-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 27, 'property_no' => '27-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 27, 'property_no' => '27-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 27, 'property_no' => '27-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 27, 'property_no' => '27-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 28 (5 units)
            ['item_id' => 28, 'property_no' => '28-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 28, 'property_no' => '28-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 28, 'property_no' => '28-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 28, 'property_no' => '28-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 28, 'property_no' => '28-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 29 (5 units)
            ['item_id' => 29, 'property_no' => '29-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 29, 'property_no' => '29-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 29, 'property_no' => '29-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 29, 'property_no' => '29-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 29, 'property_no' => '29-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 30 (5 units)
            ['item_id' => 30, 'property_no' => '30-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 30, 'property_no' => '30-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 30, 'property_no' => '30-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 30, 'property_no' => '30-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 30, 'property_no' => '30-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 31 (5 units)
            ['item_id' => 31, 'property_no' => '31-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 31, 'property_no' => '31-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 31, 'property_no' => '31-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 31, 'property_no' => '31-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 31, 'property_no' => '31-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 32 (5 units)
            ['item_id' => 32, 'property_no' => '32-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 32, 'property_no' => '32-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 32, 'property_no' => '32-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 32, 'property_no' => '32-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 32, 'property_no' => '32-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 33 (5 units)
            ['item_id' => 33, 'property_no' => '33-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 33, 'property_no' => '33-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 33, 'property_no' => '33-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 33, 'property_no' => '33-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 33, 'property_no' => '33-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 34 (5 units)
            ['item_id' => 34, 'property_no' => '34-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 34, 'property_no' => '34-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 34, 'property_no' => '34-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 34, 'property_no' => '34-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 34, 'property_no' => '34-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 35 (5 units)
            ['item_id' => 35, 'property_no' => '35-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 35, 'property_no' => '35-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 35, 'property_no' => '35-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 35, 'property_no' => '35-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 35, 'property_no' => '35-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],

            // Item_id 36 (5 units)
            ['item_id' => 36, 'property_no' => '36-001', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 36, 'property_no' => '36-002', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 36, 'property_no' => '36-003', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 36, 'property_no' => '36-004', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
            ['item_id' => 36, 'property_no' => '36-005', 'brand' => 'Generic', 'model' => 'Standard', 'specification' => 'N/A', 'item_condition' => 'GOOD', 'status' => 'AVAILABLE', 'date_acquired' => '2025-04-07'],
        ]);
    }
}
