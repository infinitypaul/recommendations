<?php

namespace App\Services;

class ApiResponse
{
    protected $responseData;

    public function getResponseData(){
        return $this->responseData;
    }

    public static function parseResponse($response){
        $resp = new ApiResponse();
        if($response->ok()){
            $resp->responseData = $response->json();
        } else {
            $response->throw();
        }
        return $resp;
    }
}
