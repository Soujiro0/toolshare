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
            'request_date' => $this->request_date,
            'return_date' => $this->return_date,
            'processed_date' => $this->processed_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'total_request_items' => $requestedItemsCount,
            'requested_items' => BorrowRequestSummaryResource::collection($requestedItems),
            'assigned_items' => BorrowRequestItemResource::collection($this->whenLoaded('items')),
        ];
    }
}
