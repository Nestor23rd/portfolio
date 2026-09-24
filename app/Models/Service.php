<?php

namespace App\Models;

use App\Models\Concerns\TranslatesModelAttributes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use TranslatesModelAttributes;

    protected $fillable = ['title', 'description', 'icon', 'sort_order', 'is_visible'];

    protected function automaticTranslationAttributes(): array
    {
        return ['title', 'description'];
    }

    protected function casts(): array
    {
        return ['is_visible' => 'boolean'];
    }
}
