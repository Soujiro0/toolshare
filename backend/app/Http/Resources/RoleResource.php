<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class RoleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'role_id' => $this->role_id,
            'role_name' => $this->role_name,
            'created_at' => $this->created_at ? Carbon::parse($this->created_at)->toIso8601String() : null,
            'updated_at' => $this->updated_at ? Carbon::parse($this->updated_at)->toIso8601String() : null,
        ];
    }
}
