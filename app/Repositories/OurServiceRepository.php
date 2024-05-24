<?php

namespace App\Repositories;

use App\Models\OurService;
use Illuminate\Support\Facades\Cache;

class OurServiceRepository
{
    public function __construct()
    {
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('our_services',function (){
            return OurService::query()->whereEnabled(1)->get();
        });
    }
}
