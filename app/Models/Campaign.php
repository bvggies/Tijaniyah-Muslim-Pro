<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'goal_amount',
        'current_amount',
        'currency',
        'image_url',
        'is_active',
        'is_featured',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'goal_amount' => 'decimal:2',
        'current_amount' => 'decimal:2',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($campaign) {
            if (empty($campaign->slug)) {
                $campaign->slug = Str::slug($campaign->title);
            }
        });
    }

    /**
     * Get the donations for the campaign.
     */
    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class);
    }

    /**
     * Get the progress percentage of the campaign.
     */
    public function getProgressPercentageAttribute(): float
    {
        if ($this->goal_amount <= 0) {
            return 0;
        }

        return min(100, ($this->current_amount / $this->goal_amount) * 100);
    }

    /**
     * Scope a query to only include active campaigns.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include featured campaigns.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
