<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $fillable = [
        'surah_number',
        'ayah_number',
        'arabic_text',
        'translation',
        'transliteration',
    ];

    /**
     * Scope a query to only include verses from a specific surah.
     */
    public function scopeBySurah($query, $surahNumber)
    {
        return $query->where('surah_number', $surahNumber);
    }

    /**
     * Scope a query to only include a specific ayah.
     */
    public function scopeByAyah($query, $surahNumber, $ayahNumber)
    {
        return $query->where('surah_number', $surahNumber)
                    ->where('ayah_number', $ayahNumber);
    }
}
