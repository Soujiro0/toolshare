<?php

namespace App\Helpers;

use App\Models\UserModel;

class UserHelper
{
    public static function generateCustomUserId(): string
    {
        $lastId = UserModel::orderBy('user_id', 'desc')->first()?->user_id;
        $nextNumber = 1;

        if ($lastId && preg_match('/USR-(\d+)/', $lastId, $matches)) {
            $nextNumber = intval($matches[1]) + 1;
        }

        // Date Prefix
        // $customId = 'USR' . now()->format('Ymd') . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        // Padding prefix
        $customId = 'USR-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

        return $customId;
    }
}
