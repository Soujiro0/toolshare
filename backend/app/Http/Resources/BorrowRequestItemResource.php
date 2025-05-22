<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ItemUnitResource;
use Carbon\Carbon;

class BorrowRequestItemResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'request_item_id' => $this->request_item_id,
            'request' => new BorrowRequestResource($this->request),
            'unit' => new ItemUnitResource($this->unit),
            'item_condition_out' => $this->item_condition_out,
            'item_condition_in' => $this->item_condition_in,
            'damage_status' => $this->damage_status,
            'damage_notes' => $this->damage_notes,
            'request_date' => $this->request_date ? Carbon::parse($this->request_date)->toIso8601String() : null,
            'returned_date' => $this->returned_date ? Carbon::parse($this->returned_date)->toIso8601String() : null,
            'created_at' => $this->created_at ? Carbon::parse($this->created_at)->toIso8601String() : null,
            'updated_at' => $this->updated_at ? Carbon::parse($this->updated_at)->toIso8601String() : null,
        ];
    }
}
