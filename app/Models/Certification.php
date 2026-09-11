<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = ['title', 'issuer', 'description', 'credential_id', 'credential_url', 'status', 'issued_at', 'sort_order', 'is_visible'];

    protected function casts(): array
    {
        return ['issued_at' => 'date', 'is_visible' => 'boolean'];
    }
}
