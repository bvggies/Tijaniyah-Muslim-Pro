<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = [
        'title',
        'speaker',
        'summary',
        'tags',
        'media_url',
        'media_type',
        'duration',
        'thumbnail_url',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Scope a query to only include published sermons.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include sermons by speaker.
     */
    public function scopeBySpeaker($query, $speaker)
    {
        return $query->where('speaker', $speaker);
    }

    /**
     * Scope a query to only include sermons by media type.
     */
    public function scopeByMediaType($query, $type)
    {
        return $query->where('media_type', $type);
    }
}
