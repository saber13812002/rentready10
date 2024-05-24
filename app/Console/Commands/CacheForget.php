<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheForget extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cache-forget';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Cache::forget('menus');
        Cache::forget('sliders');
        Cache::forget('footers');
        Cache::forget('benefits');
        Cache::forget('quotas');
        Cache::forget('options');
        Cache::forget('how_works');
        Cache::forget('backgrounds');
        Cache::forget('our_services');
        Cache::forget('solution_benefits');

        $this->info('done');
    }
}
