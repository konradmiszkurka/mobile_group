<?php

namespace App\Services\Api;

use App\Models\ApiAd;
use GuzzleHttp\Client;
use Illuminate\Container\Container;

class AdsService extends Container
{
    public static function getAds()
    {
        $url = env('API_URL');

        $client = new Client();
        $res    = $client->request('GET', $url);

        $data = \GuzzleHttp\json_decode($res->getBody());

        return self::saveAds($data->data);
    }

    public static function saveAds($data)
    {
        foreach ($data as $key => $value) {
            $ad = ApiAd::where('code', '=', $value->code)->first();

            if(!$ad) {
                $ad = new ApiAd();
            }
            $ad->api_id = $value->id;
            $ad->api_created_at = $value->created_at;
            $ad->api_updated_at = $value->updated_at;
            $ad->date_start = $value->date_start;
            $ad->date_end   = $value->date_end;
            $ad->admin_name = $value->admin_name;
            $ad->show_in_list = $value->show_in_list;
            $ad->templates_ads_id = $value->templates_ads_id;
            $ad->templates_forms_id = $value->templates_forms_id;
            $ad->form_id = $value->form_id;
            $ad->projects_id = $value->projects_id;
            $ad->code = $value->code;
            $ad->expiring_notification = $value->expiring_notification;
            $ad->created_by = $value->created_by;
            $ad->categories = \GuzzleHttp\json_encode($value->categories);
            $ad->positions = \GuzzleHttp\json_encode($value->positions);
            $ad->cities = \GuzzleHttp\json_encode($value->cities);
            $ad->exports = \GuzzleHttp\json_encode($value->exports);
            $ad->content = \GuzzleHttp\json_encode($value->content);
            $ad->save();

        }
    }
}
