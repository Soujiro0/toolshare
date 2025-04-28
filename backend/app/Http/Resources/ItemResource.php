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
            'acquisition_date' => $this->acquisition_date,
            'category' => new ItemCategoryResource($this->whenLoaded('category')),
            'item_units_count' => $itemUnitsCount,
            'item_units' => ItemUnitResource::collection($itemUnits),
            'date_created' => $this->date_created,
            'date_updated' => $this->date_updated,
        ];
    }
}
