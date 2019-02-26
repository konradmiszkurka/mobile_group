<?php

namespace App\Services;

use App\Services\Api\AdsService;
use Illuminate\Container\Container;

class CronService extends Container
{
    public static function handle()
    {
        AdsService::getAds();
    }
}