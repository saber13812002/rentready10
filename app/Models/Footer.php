<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Footer extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::saving(function () {

            Artisan::call('cache:clear');

        });
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('footer-logo')->singleFile();
    }

    public function getLogoAttribute()
    {
        $logoCollectionName = 'footer-logo';
        return $this->getFirstMediaUrl($logoCollectionName) != "" ? $this->getFirstMediaUrl($logoCollectionName) : "/storage/assets/img/logo/1.png";

    }
}
