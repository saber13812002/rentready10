<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Pdf extends Model implements HasMedia
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('pdf')->singleFile();
    }

    public function getPdfAttribute(): string
    {
        $logoCollectionName = 'pdf';
        return $this->getFirstMediaUrl($logoCollectionName);
    }
}
