<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CityResource extends ResourceCollection
{
    public $collects = ProductResource::class;
    private $weather;
    private $city;


    public function __construct($resource, $weather, $city)
    {
        parent::__construct($resource);
        $this->weather = $weather;
        $this->city = $city;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'city' => $this->city,
            'current_weather' => $this->weather,
            'recommended_products' => $this->collection
        ];
    }

}
