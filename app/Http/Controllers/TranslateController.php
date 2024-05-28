<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslateController extends Controller
{
    public static function translate(Request $request){

            $q = $request->arama;

            $url = 'https://deep-translate1.p.rapidapi.com/language/translate/v2';

            $response = Http::withHeaders([
                'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com',
                'X-RapidAPI-Key' => 'c124051fc5mshcbc605c6a5c7ee3p165f95jsn10cc1040b23c',
                'content-type' => 'application/json',
            ])->withBody('{
                "q": "'.$q.'",
                "source": "en",
                "target": "tr"
            }',"raw")->post($url);



//        $url = 'https://deep-translate1.p.rapidapi.com/language/translate/v2?key='.$q;
//
//        $response = Http::withHeaders([
//            'content-type' => 'application/json',
//            'X-RapidAPI-Key' => 'd783f70ac8msh1d9637566ac541ap123b4ejsnea686ef4b1bf',
//            'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com'
//        ])->withBody('{
//             "q": "'.$q.'",
//             "source": "'.$detect_result.'",
//              "target": "tr"
//            }',"raw")->post($url);
//
//
        $result = $response["data"]["translations"]["translatedText"];

        return view('front.search.search', compact('result'));
    }
}
