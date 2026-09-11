<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'slug', 'category', 'excerpt', 'description', 'technologies', 'image_path', 'project_url', 'repository_url', 'is_featured', 'is_published', 'sort_order', 'published_at'];

    protected function casts(): array
    {
        return ['technologies' => 'array', 'is_featured' => 'boolean', 'is_published' => 'boolean', 'published_at' => 'datetime'];
    }
}
