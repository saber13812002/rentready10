<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Slider extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('slider-image')->singleFile();
    }

    public function getImageAttribute(): string
    {
        $logoCollectionName = 'slider-image';
        return $this->getFirstMediaUrl($logoCollectionName) != "" ? $this->getFirstMediaUrl($logoCollectionName) : "/storage/assets/img/Frame_2856.png";
    }

}
