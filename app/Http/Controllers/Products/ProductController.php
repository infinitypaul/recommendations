<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param $currentWeather
     * @param $city
     *
     * @return \App\Http\Resources\CityResource
     */
    public function __invoke($currentWeather, $city)
    {
        return (new CityResource(
            Product::tag($currentWeather)->paginate(10),
            $currentWeather,
            $city
        ));
    }
}
