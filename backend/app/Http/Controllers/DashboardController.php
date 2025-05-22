<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use App\Models\BorrowRequestModel;
use App\Models\ItemUnitModel;
use App\Models\UserModel;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    /**
     * Get dashboard statistics
     *
     * @return JsonResponse
     */
    public function getStats(): JsonResponse
    {
        $today = Carbon::today();
        $weekStart = Carbon::now()->startOfWeek();

        $stats = [
            'availableUnits' => ItemUnitModel::where('status', 'AVAILABLE')->count(),
            'inUseUnits' => ItemUnitModel::where('status', 'IN_USE')->count(),
            'maintenanceUnits' => ItemUnitModel::where('status', 'UNDER_MAINTENANCE')->count(),

            'approvedToday' => BorrowRequestModel::where('status', '!=', 'PENDING')
                ->whereDate('updated_at', $today)
                ->count(),

            'approvedThisWeek' => BorrowRequestModel::whereNot('status', 'PENDING')
                ->whereBetween('updated_at', [$weekStart, Carbon::now()])
                ->count(),

            'topRequesters' => UserModel::where('role_id', 3)->withCount(['borrowRequests'])
                ->orderByDesc('borrow_requests_count')
                ->limit(5)
                ->get()
                ->map(function ($user) {
                    return [
                        'name' => $user->name,
                        'request_count' => $user->borrow_requests_count
                    ];
                })
        ];

        return response()->json([
            'success' => true,
            'data' => $stats,
        ]);
    }


    /**
     * Get Most Borrowed Items
     *
     * @return JsonResponse
     */
    public function getMostBorrowedItems()
    {
        $items = ItemModel::orderBy('borrowed_count', 'desc')
            ->take(5)
            ->get();

        return response()->json([
            'success' => true,
            'data' => $items
        ]);
    }
}
