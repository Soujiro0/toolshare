<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'role' => new RoleResource($this->whenLoaded('role')),
            'date_created' => \Carbon\Carbon::parse($this->date_created)->toIso8601String(),
            'last_updated' => \Carbon\Carbon::parse($this->last_updated)->toIso8601String(),
        ];
    }
}
