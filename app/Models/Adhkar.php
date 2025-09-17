<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adhkar extends Model
{
    protected $fillable = [
        'title',
        'arabic_text',
        'translation',
        'transliteration',
        'category',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active adhkars.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include adhkars by category.
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
