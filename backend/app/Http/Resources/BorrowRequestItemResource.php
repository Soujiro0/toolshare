<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BorrowRequestItemResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'request_item_id' => $this->request_item_id,
            'request_id' => $this->request_id,
            'unit_id' => $this->unit_id,
            'item_condition_out' => $this->item_condition_out,
            'item_condition_in' => $this->item_condition_in,
            'damage_status' => $this->damage_status,
            'damage_notes' => $this->damage_notes,
            'returned_date' => $this->returned_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
