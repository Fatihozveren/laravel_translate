<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslateController extends Controller
{
    public static function translate(Request $request){
        $q = $request->arama;
        $url = 'https://deep-translate1.p.rapidapi.com/language/translate/v2?key='.$q;

        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'X-RapidAPI-Key' => 'd783f70ac8msh1d9637566ac541ap123b4ejsnea686ef4b1bf',
            'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com'
        ])->withBody('{
             "q": "'.$q.'",
             "source": "en",
              "target": "tr"
            }',"raw")->post($url);

        $result = $response["data"]["translations"]["translatedText"];

        return view('front.search.search', compact('result'));
    }
}
