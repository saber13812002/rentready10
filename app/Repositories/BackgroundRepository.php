<?php

namespace App\Repositories;

use App\Models\Background;
use Illuminate\Support\Facades\Cache;

class BackgroundRepository
{
    public function __construct()
    {
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('backgrounds',function (){
            return Background::query()->get()->pluck('image', 'key')->toArray();
        });
    }
}
