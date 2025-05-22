<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use Carbon\Carbon;
class ItemUnitResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'unit_id' => $this->unit_id,
            'item_id' => $this->item_id,
            'property_no' => $this->property_no,
            'brand' => $this->brand,
            'model' => $this->model,
            'specification' => $this->specification,
            'item_condition' => $this->item_condition,
            'status' => $this->status,
            'date_acquired' => $this->date_acquired ? Carbon::parse($this->date_acquired)->toIso8601String() : null,
            'item' => new ItemResource($this->item),
        ];
    }
}
