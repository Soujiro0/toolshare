<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class BorrowRequestSummaryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'request_summary_id' => $this->request_summary_id,
            'request_id' => $this->request_id,
            'item' => new ItemResource($this->item),
            'quantity' => $this->quantity,
            'created_at' => $this->created_at ? Carbon::parse($this->created_at)->toIso8601String() : null,
            'updated_at' => $this->updated_at ? Carbon::parse($this->updated_at)->toIso8601String() : null,
        ];
    }
}
