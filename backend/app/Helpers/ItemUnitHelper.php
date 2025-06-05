<?php

namespace App\Helpers;

use App\Models\ItemUnitModel;

class ItemUnitHelper
{
    /**
     * Generate the next property number for an item.
     *
     * @param int $itemId
     * @param int $count
     * @return array
     */
    public static function generatePropertyNumbers(int $itemId, int $count): array
    {
        $lastUnit = ItemUnitModel::where('item_id', $itemId)
            ->orderByDesc('unit_id')
            ->first();

        $suffix = 0;
        if ($lastUnit && preg_match('/\d{3}$/', $lastUnit->property_no, $matches)) {
            $suffix = (int) $matches[0];
        }

        $propertyNumbers = [];
        for ($i = 1; $i <= $count; $i++) {
            $suffix++;
            $propertyNumbers[] = sprintf("%d-%03d", $itemId, $suffix);
        }

        return $propertyNumbers;
    }
}
