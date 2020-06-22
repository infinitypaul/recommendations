<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\ProductResource;
use App\Product;
use App\Services\meteoService;
use Illuminate\Http\Request;


class RecommendedController extends Controller
{
    public function index(Request $request)
    {
        $currentWeather = (new meteoService('/places/'.$request->city.'/forecasts/long-term'))
            ->makeRequest()
            ->getResponseData()['forecastTimestamps'][0]['conditionCode'];

        $products = Product::tag($currentWeather)->paginate(10);

        return (new CityResource($products, $currentWeather, $request->city));
    }
}
