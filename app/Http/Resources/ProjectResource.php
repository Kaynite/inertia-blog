<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brief' => $this->brief,
            'body' => $this->body,
            'is_published' => $this->is_published,
            'created_at' => $this->created_at->format('M d, Y'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
