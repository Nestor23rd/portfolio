<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name', 'description', 'category', 'proficiency', 'sort_order', 'is_visible'];

    protected function casts(): array
    {
        return ['proficiency' => 'integer', 'is_visible' => 'boolean'];
    }
}
