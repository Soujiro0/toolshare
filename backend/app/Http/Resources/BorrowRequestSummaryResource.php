<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BorrowRequestSummaryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'request_summary_id' => $this->request_summary_id,
            'request_id' => $this->request_id,
            'item' => new ItemResource($this->item),
            'quantity' => $this->quantity,
            'created_at' => \Carbon\Carbon::parse($this->created_at)->toIso8601String(),
            'updated_at' => \Carbon\Carbon::parse($this->updated_at)->toIso8601String(),
        ];
    }
}
