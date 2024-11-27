<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'status' => [
                'label' => $this->status->label(),
                'value' => $this->status->value
            ],
            'users' => UserResource::collection($this->whenLoaded('users'))
        ];
    }
}
