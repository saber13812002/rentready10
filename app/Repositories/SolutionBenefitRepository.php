<?php

namespace App\Repositories;

use App\Models\SolutionBenefit;
use Illuminate\Support\Facades\Cache;

class SolutionBenefitRepository
{
    public function __construct()
    {
    }

    public static function getEnabled()
    {
        return Cache::rememberForever('solution_benefits',function (){
            return SolutionBenefit::query()->whereEnabled(1)->get();
        });
    }
}
