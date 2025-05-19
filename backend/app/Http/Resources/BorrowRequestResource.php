<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BorrowRequestResource extends JsonResource
{
    public function toArray($request)
    {
        $requestedItems = $this->whenLoaded('summary');
        $requestedItemsCount = ($requestedItems instanceof \Illuminate\Database\Eloquent\Collection) ? $requestedItems->count() : 0;

        return [
            'request_id' => $this->request_id,
            'user' => new UserResource($this->user),
            'status' => $this->status,
            'purpose' => $this->purpose,
            'remarks' => $this->remarks,
            'authorized_students' => BorrowRequestStudentResource::collection($this->authorizedStudents),
            'handled_by' => $this->handled_by,
            'request_date' => \Carbon\Carbon::parse($this->request_date)->toIso8601String(),
            'return_date' => \Carbon\Carbon::parse($this->return_date)->toIso8601String(),
            'processed_date' => \Carbon\Carbon::parse($this->processed_date)->toIso8601String(),
            'created_at' => \Carbon\Carbon::parse($this->created_at)->toIso8601String(),
            'updated_at' => \Carbon\Carbon::parse($this->updated_at)->toIso8601String(),
            'total_request_items' => $requestedItemsCount,
            'requested_items' => BorrowRequestSummaryResource::collection($requestedItems),
            'assigned_items' => BorrowRequestItemResource::collection($this->whenLoaded('items')),
        ];
    }
}
