<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Models\Option;
use Illuminate\Support\Facades\Cache;

class OptionRepository
{
    public function __construct()
    {
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('options',function (){
            return Option::query()->get()->pluck('value','key')->toArray();
        });
    }
}
