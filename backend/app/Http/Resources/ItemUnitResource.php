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
            'item' => new ItemResource($this->item),
            'property_no' => $this->property_no,
            'brand' => $this->brand,
            'model' => $this->model,
            'specification' => $this->specification,
            'item_condition' => $this->item_condition,
            'availability_status' => $this->availability_status,
            'operational_status' => $this->operational_status,
            'date_acquired' => $this->date_acquired ? Carbon::parse($this->date_acquired)->toIso8601String() : null,
            'created_at' => $this->created_at ? Carbon::parse($this->created_at)->toIso8601String() : null,
            'updated_at' => $this->updated_at ? Carbon::parse($this->updated_at)->toIso8601String() : null,
        ];
    }
}
