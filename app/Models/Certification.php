<?php

namespace App\Models;

use App\Models\Concerns\TranslatesModelAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Certification extends Model
{
    use TranslatesModelAttributes;

    protected $fillable = ['title', 'issuer', 'description', 'credential_id', 'credential_url', 'document_path', 'document_type', 'status', 'issued_at', 'sort_order', 'is_visible'];

    protected $appends = ['document_url'];

    public function getDocumentUrlAttribute(): ?string
    {
        return $this->document_path ? Storage::disk('public')->url($this->document_path) : null;
    }

    protected function casts(): array
    {
        return ['issued_at' => 'date', 'is_visible' => 'boolean'];
    }

    protected function automaticTranslationAttributes(): array
    {
        return ['title', 'description'];
    }
}
