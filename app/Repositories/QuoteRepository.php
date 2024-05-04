<?php

namespace App\Repositories;

use App\Models\Quote;
use Illuminate\Support\Facades\Cache;

class QuoteRepository
{
    public function __construct()
    {
        //
    }


    public static function getEnabled()
    {
        return Cache::rememberForever('quotas', function () {
            return Quote::query()->whereEnabled(1)->get();
        });
    }
}
