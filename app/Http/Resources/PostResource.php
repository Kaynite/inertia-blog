<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'is_published' => $this->is_published,
            'reading_time' => $this->reading_time,
            'created_at' => $this->created_at->format('M d, Y'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
            'categories' => CategoryResource::collection($this->whenLoaded('categories')),
        ];
    }
}
