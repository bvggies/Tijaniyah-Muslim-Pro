<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PrayerPreference extends Model
{
    protected $fillable = [
        'user_id',
        'method',
        'latitude',
        'longitude',
        'timezone_offset',
        'city',
        'country',
        'is_active',
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'is_active' => 'boolean',
    ];

    /**
     * Get the user that owns the prayer preference.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
