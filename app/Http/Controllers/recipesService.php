<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;


class recipesService extends Controller
{
    private $uri = 'http://www.recipepuppy.com/api/';

    public function searchRecipesByKeyword($keyword){
        $client = new Client([
            'base_uri' => $this->uri,
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', '?q='. $keyword );
        if($response->getStatusCode() == 200){
            $response =  json_decode( $response->getBody()->getContents() );
            return $response->results;
        } else {
            return response()->json([
                'status' => $response->getStatusCode(),
                'msj' => 'Algo ha fallado!'
            ]);
        }

    }

    public function searchRecipesByIngredients($ingredients){

            $client = new Client([
                'base_uri' => $this->uri,
                'timeout'  => 2.0,
            ]);
            $response = $client->request('GET', '?i='. $ingredients );
        if($response->getStatusCode() == 200){
            $response =  json_decode( $response->getBody()->getContents() );
            return $response->results;
        } else {
            return response()->json([
                'status' => $response->getStatusCode(),
                'msj' => 'Algo ha fallado!'
            ]);
        }
    }




}
