<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\HTTPRequester;

class ApiController extends Controller
{
    public function get_token(){
        $url = config('app.hangtindung.admin.token_url');
        $token = 'null';
        $header = array(
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        );
        $requestArr = array(
            "email" => config('app.hangtindung.admin.email'),
            "password" => config('app.hangtindung.admin.password')
        );

        $response = HTTPRequester::HTTPPostFormData($url, $requestArr, $header);
        if($response != null){
            $token = $response['data']['token'];
        }


        return $token;
    }

   
    public function convertshoppingpoint()
    {
        $token = $this->get_token();
        $url = config('app.hangtindung.admin.convert_shopping_point_url');
        $header = array(
            'Content-Type: application/json',
            // 'Authorization: Bearer '.$token,
            'Accept: application/json'
        );
        $requestArr = array(
            "api_token" => $token,
        );
        $response = HTTPRequester::HTTPPostBodyHeader($url, $requestArr, $header);
        if($response != null){
            return $response;
        }
        return 'Failed!';
    }
}
