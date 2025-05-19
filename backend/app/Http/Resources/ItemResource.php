<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    public function toArray($request)
    {
        $itemUnits = $this->whenLoaded('units');
        $itemUnitsCount = ($itemUnits instanceof \Illuminate\Database\Eloquent\Collection) ? $itemUnits->count() : 0;

        return [
            'item_id' => $this->item_id,
            'name' => $this->name,
            'unit' => $this->unit,
            'image_url' => $this->image_path ? url('storage/' . $this->image_path) : null,
            'borrowed_count' => $this->borrowed_count,
            'acquisition_date' => \Carbon\Carbon::parse($this->acquisition_date)->toIso8601String(),
            'category' => new ItemCategoryResource($this->whenLoaded('category')),
            'item_units_count' => $itemUnitsCount,
            'item_units' => ItemUnitResource::collection($itemUnits),
            'date_created' => \Carbon\Carbon::parse($this->date_created)->toIso8601String(),
            'date_updated' => \Carbon\Carbon::parse($this->date_updated)->toIso8601String(),
        ];
    }
}
