<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class meteoService
{
    private $data = [];

    private $baseUrl = 'https://api.meteo.lt/v1';

    protected $path;

    protected static $allowedMethods = ['get', 'post'];

    private static $method = 'get';

    function __construct($path)
    {
        $this->path = $path;
    }

    public static function addMethod($method){
        if(in_array(strtolower($method), self::$allowedMethods)){
            return self::$method = $method;
        }
        return self::$method;
    }

    public function addBody($name, $value){
        $this->data[$name] = $value;
        return $this;
    }

    public function makeRequest(){
        $response = Http::timeout(3)->{self::$method}($this->baseUrl.$this->path, $this->data);
        return ApiResponse::parseResponse($response);

    }
}
