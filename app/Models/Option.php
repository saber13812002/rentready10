<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Option extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::saving(function () {

            Artisan::call('cache:clear');

        });
    }

}
