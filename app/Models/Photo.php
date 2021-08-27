<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Photo extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia ;

    protected $fillable = [
        'path'
    ];

    protected $casts = [
        'path' => 'array',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections() : void
    {
        $this->addMediaCollection('main')->singleFile();
        $this->addMediaCollection('my_multi_collection');
    }
}
