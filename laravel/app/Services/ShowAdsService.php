<?php

namespace App\Services;

use Illuminate\Container\Container;

class ShowAdsService extends Container
{
    protected $data = [];

    public static function getAds($ads)
    {
        foreach($ads as $key => $ad) {
            $data[$ad['id']] = [
                'api_id' => $ad['api_id'],
                'title'  => \GuzzleHttp\json_decode($ad['content'])->title,
                'cities' => \GuzzleHttp\json_decode($ad['cities'])
            ];
        }

        return $data;
    }
}