<?php

namespace App\Http\Controllers;

use App\Models\ApiAd;
use App\Services\Api\AdsService;
use App\Services\ShowAdsService;

class MainAdsController extends Controller
{
    public function index()
    {
        $data   = [];
        $ads    = ApiAd::all();

        if(!$ads->isEmpty()) {
            $data   = ShowAdsService::getAds($ads);
        }

        return view('ads', compact('data'));
    }
}
