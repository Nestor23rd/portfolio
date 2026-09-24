<?php

namespace App\Models;

use App\Models\Concerns\TranslatesModelAttributes;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use TranslatesModelAttributes;

    protected $fillable = [
        'name',
        'name_en',
        'description',
        'description_en',
        'category',
        'category_en',
        'proficiency',
        'sort_order',
        'is_visible',
    ];

    public function localizedName(?string $locale = null): string
    {
        $locale ??= app()->getLocale();

        return $locale === 'en' && filled($this->name_en)
            ? $this->name_en
            : $this->name;
    }

    public function localizedDescription(?string $locale = null): ?string
    {
        $locale ??= app()->getLocale();

        return $locale === 'en' && filled($this->description_en)
            ? $this->description_en
            : $this->description;
    }

    public function localizedCategory(?string $locale = null): string
    {
        $locale ??= app()->getLocale();

        return $locale === 'en' && filled($this->category_en)
            ? $this->category_en
            : $this->category;
    }

    protected function automaticTranslationAttributes(): array
    {
        return ['name', 'description', 'category'];
    }

    protected function casts(): array
    {
        return ['proficiency' => 'integer', 'is_visible' => 'boolean'];
    }
}
