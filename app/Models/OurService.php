<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class OurService extends Model implements HasMedia
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
        $this->addMediaCollection('our-service-logo')->singleFile();
    }

    public function getLogoAttribute()
    {
        $logoCollectionName = 'our-service-logo';
        return $this->getFirstMediaUrl($logoCollectionName) != "" ? $this->getFirstMediaUrl($logoCollectionName) : "/storage/assets/img/logo/1.png";
    }
}
