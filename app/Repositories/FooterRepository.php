<?php

namespace App\Repositories;

use App\Models\Footer;
use Illuminate\Support\Facades\Cache;

class FooterRepository
{
    public function __construct()
    {
        //
    }


    public static function getEnabled()
    {
        return Cache::rememberForever('footer', function () {
            return Footer::query()->first();
        });
    }
}
