<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'max_value' => $this->max_value,
            'drawn_date' => $this->drawn_date->format('d/m/Y')
        ];
    }
}
