<?php

namespace App\Models;

use App\Http\Resources\PostResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)
            ->withTimestamps();
    }

    public function toResource(): PostResource
    {
        return PostResource::make($this);
    }
}
