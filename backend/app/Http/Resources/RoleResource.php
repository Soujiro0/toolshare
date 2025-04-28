<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'role_id' => $this->role_id,
            'role_name' => $this->role_name,
        ];
    }
}
