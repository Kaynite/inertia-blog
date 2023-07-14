<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Http\Resources\PostResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function readingTime(): Attribute
    {
        return Attribute::get(fn() => Str::readDuration($this->body));
    }

    public function toResource(): PostResource
    {
        return PostResource::make($this);
    }
}
