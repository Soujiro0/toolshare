<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ItemUnitResource;

class BorrowRequestItemResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'request_item_id' => $this->request_item_id,
            // 'request_id' => $this->request_id,
            'request' => new BorrowRequestResource($this->request),
            // 'unit' => new ItemUnitResource($this->whenLoaded('unit')),
            'unit' => new ItemUnitResource($this->unit), // no whenLoaded
            'item_condition_out' => $this->item_condition_out,
            'item_condition_in' => $this->item_condition_in,
            'damage_status' => $this->damage_status,
            'damage_notes' => $this->damage_notes,
            'returned_date' => \Carbon\Carbon::parse($this->returned_date)->toIso8601String(),
            'created_at' => \Carbon\Carbon::parse($this->created_at)->toIso8601String(),
            'updated_at' => \Carbon\Carbon::parse($this->updated_at)->toIso8601String(),
        ];
    }
}
