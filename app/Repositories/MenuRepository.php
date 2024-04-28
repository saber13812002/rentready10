<?php

namespace App\Repositories;

use App\Models\Menu;
use Illuminate\Support\Facades\Cache;

class MenuRepository
{
    public function __construct()
    {
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('menu',function (){
            return Menu::query()->whereEnabled(1)->get();
        });
    }
}
