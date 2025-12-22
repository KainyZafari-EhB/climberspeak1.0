<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image_path', 'image_base64', 'content', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $hidden = [
        'image_base64', // Hide from JSON (large data)
    ];

    /**
     * Get the news image (base64 or path).
     * Prioritizes base64, falls back to path for seeded/old data.
     */
    public function getImageAttribute(): ?string
    {
        return $this->image_base64 ?? $this->image_path;
    }
}
