<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    protected $fillable = ['title', 'slug', 'category', 'excerpt', 'description', 'challenge', 'solution', 'results', 'technologies', 'image_path', 'project_url', 'repository_url', 'is_featured', 'is_published', 'sort_order', 'published_at'];

    protected $appends = ['image_url'];

    protected function casts(): array
    {
        return ['technologies' => 'array', 'is_featured' => 'boolean', 'is_published' => 'boolean', 'published_at' => 'datetime'];
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image_path
            ? Storage::disk(config('filesystems.project_media_disk', 'public'))->url($this->image_path)
            : null;
    }
}
