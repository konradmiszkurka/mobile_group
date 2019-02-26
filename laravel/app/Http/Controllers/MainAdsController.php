<?php

namespace App\Http\Controllers;

use App\Models\ApiAd;
use App\Services\Api\AdsService;
use App\Services\ShowAdsService;

class MainAdsController extends Controller
{
    public function index()
    {
        $ads = ApiAd::all();
        $data = ShowAdsService::getAds($ads);

        return view('ads', compact('data'));
    }
}
