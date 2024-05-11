<?php

namespace App\Repositories;

use App\Models\Footer;
use App\Models\HowWork;
use Illuminate\Support\Facades\Cache;

class HowWorkRepository
{
    public function __construct()
    {
        //
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('how_works', function () {
            return HowWork::query()->whereEnabled(1)->get();
        });
    }
}
