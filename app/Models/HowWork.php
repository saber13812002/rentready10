<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HowWork extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = [];


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('how-work-logo')->singleFile();
        $this->addMediaCollection('how-work-image')->singleFile();
    }

    public function getLogoAttribute()
    {
        $logoCollectionName = 'how-work-logo';
        return $this->getFirstMediaUrl($logoCollectionName) != "" ? $this->getFirstMediaUrl($logoCollectionName) : "/storage/assets/img/logo/1.png";

    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('how-work-image');
    }
}
