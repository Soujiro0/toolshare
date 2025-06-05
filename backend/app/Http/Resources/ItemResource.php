<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ItemResource extends JsonResource
{
    public function toArray($request)
    {
        $itemUnits = $this->whenLoaded('units');
        $itemUnitsCount = ($itemUnits instanceof \Illuminate\Database\Eloquent\Collection) ? $itemUnits->count() : 0;

        $availableStatusCount = $itemUnitsCount ? $itemUnits->where('availability_status', 'AVAILABLE')->count() : 0;
        $borrowedStatusCount = $itemUnitsCount ? $itemUnits->where('availability_status', 'BORROWED')->count() : 0;

        return [
            'item_id' => $this->item_id,
            'image_url' => $this->image_path ? url('storage/' . $this->image_path) : null,
            'name' => $this->name,
            'unit_of_measure' => $this->unit_of_measure,
            'borrowed_count' => $this->borrowed_count,
            'category' => new ItemCategoryResource($this->whenLoaded('category')),
            'item_units_count' => $itemUnitsCount,
            'available_status_count' => $availableStatusCount,
            'borrowed_status_count' => $borrowedStatusCount,
            'item_units' => ItemUnitResource::collection($itemUnits),
            'created_at' => $this->created_at ? Carbon::parse($this->created_at)->toIso8601String() : null,
            'updated_at' => $this->updated_at ? Carbon::parse($this->updated_at)->toIso8601String() : null,
        ];
    }
}
