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
                'X-RapidAPI-Host' => '#############################',
                'X-RapidAPI-Key' => '#############################',
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
//            'X-RapidAPI-Key' => '#############################',
//            'X-RapidAPI-Host' => '#############################'
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
