<?php

namespace App\Repositories;

use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Support\Facades\Cache;

class SliderRepository
{
    public function __construct()
    {
        //
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('sliders',function (){
            return Slider::query()->whereEnabled(1)->get();
        });
    }
}
