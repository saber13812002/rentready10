<?php

namespace App\Repositories;

use App\Models\Benefit;
use App\Models\Menu;
use Illuminate\Support\Facades\Cache;

class BenefitRepository
{
    public function __construct()
    {
        //
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('benefits',function (){
            return Benefit::query()->whereEnabled(1)->get();
        });
    }
}
