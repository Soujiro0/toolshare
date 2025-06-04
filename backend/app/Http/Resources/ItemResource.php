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

        $availableCount = $itemUnitsCount ? $itemUnits->where('status', 'AVAILABLE')->count() : 0;
        $inUseCount = $itemUnitsCount ? $itemUnits->where('status', 'IN_USE')->count() : 0;

        return [
            'item_id' => $this->item_id,
            'image_url' => $this->image_path ? url('storage/' . $this->image_path) : null,
            'name' => $this->name,
            'unit_of_measure' => $this->unit_of_measure,
            'borrowed_count' => $this->borrowed_count,
            'acquisition_date' => $this->acquisition_date ? Carbon::parse($this->acquisition_date)->toIso8601String() : null,
            'category' => new ItemCategoryResource($this->whenLoaded('category')),
            'item_units_count' => $itemUnitsCount,
            'available_count' => $availableCount,
            'in_use_count' => $inUseCount,
            'item_units' => ItemUnitResource::collection($itemUnits),
            'created_at' => $this->created_at ? Carbon::parse($this->created_at)->toIso8601String() : null,
            'updated_at' => $this->updated_at ? Carbon::parse($this->updated_at)->toIso8601String() : null,
        ];
    }
}
