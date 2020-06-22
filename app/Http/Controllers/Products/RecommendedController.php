<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Product;
use App\Services\meteoService;
use Illuminate\Http\Request;


class RecommendedController extends Controller
{

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\CityResource
     */
    public function __invoke(Request $request)
    {
        $url = '/places/'.$request->city.'/forecasts/long-term';

        $foreCast = (new meteoService($url))
            ->makeRequest()
            ->getResponseData();

       return app(ProductController::class)(
            $foreCast['forecastTimestamps'][0]['conditionCode'],
            $request->city
        );

    }
}
