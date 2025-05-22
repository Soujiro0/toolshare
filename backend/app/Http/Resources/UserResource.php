<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            // 'profile_image' => $this->profile_path ? url('storage/' . $this->profile_path) : null,
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'role' => new RoleResource($this->whenLoaded('role')),
            'date_created' => $this->date_created ? Carbon::parse($this->date_created)->toIso8601String() : null,
            'last_updated' => $this->last_updated ? Carbon::parse($this->last_updated)->toIso8601String() : null,
        ];
    }
}
