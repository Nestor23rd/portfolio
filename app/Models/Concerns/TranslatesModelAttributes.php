<?php

namespace App\Models\Concerns;

use App\Services\LibreTranslate;

trait TranslatesModelAttributes
{
    /**
     * @return list<string>
     */
    protected function automaticTranslationAttributes(): array
    {
        return [];
    }

    public function getAttribute($key): mixed
    {
        $value = parent::getAttribute($key);

        if (! is_string($key)
            || ! is_string($value)
            || app()->getLocale() === 'fr'
            || ! in_array($key, $this->automaticTranslationAttributes(), true)
            || (app()->bound('request') && request()->routeIs('admin.*'))) {
            return $value;
        }

        $existingTranslation = parent::getAttribute($key.'_'.app()->getLocale());

        if (is_string($existingTranslation) && trim($existingTranslation) !== '') {
            return $existingTranslation;
        }

        return app(LibreTranslate::class)->translate($value, 'en');
    }
}
