<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Services\meteoService;
use Illuminate\Http\Request;


class RecommendedController extends Controller
{
    public function index($city)
    {
        $currentWeather = (new meteoService('/places/'.$city.'/forecasts/long-term'))
            ->makeRequest()
            ->getResponseData();
        dd($currentWeather['forecastTimestamps'][0]['conditionCode']);
    }
}
