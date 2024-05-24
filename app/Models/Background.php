<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Background extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public static function boot()
    {
        parent::boot();

        static::saving(function () {

            Artisan::call('cache:clear');

        });
    }

    protected $guarded = [];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('background-image')->singleFile();
    }


    public function getImageAttribute(): string
    {
        $logoCollectionName = 'background-image';
        return $this->getFirstMediaUrl($logoCollectionName) != "" ? $this->getFirstMediaUrl($logoCollectionName) : "/storage/assets/img/shutterstock_225114895_(1).png";
    }
}
