<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemUnitResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'unit_id' => $this->unit_id,
            'item_id' => $this->item_id, // just the foreign key (integer)
            'property_no' => $this->property_no,
            'brand' => $this->brand,
            'model' => $this->model,
            'specification' => $this->specification,
            'item_condition' => $this->item_condition,
            'status' => $this->status,
            'date_acquired' => \Carbon\Carbon::parse($this->date_acquired)->toIso8601String(),
            // 'item' => new ItemResource($this->whenLoaded('item')), // full nested object
            // 'item' => $this->item,
            'item' => new ItemResource($this->item), // no whenLoaded

        ];
    }

}
