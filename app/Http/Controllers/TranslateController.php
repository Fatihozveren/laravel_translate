<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslateController extends Controller
{
    public static function translate(Request $request){

        $q = $request->arama;
        $detect_url = 'https://translo.p.rapidapi.com/api/v3/detect?text='.$q;

        $detect_response = Http::withHeaders([
            'X-RapidAPI-Key' => '083260f6e7msh76b3e8d1341225ep1d1b5djsn38b8a0fe5156',
            'X-RapidAPI-Host' => 'translo.p.rapidapi.com'
        ])->withBody('{
             "text": "'.$q.'",
            }',"raw")->get($detect_url);

        $detect_result = $detect_response['lang'];


        $url = 'https://deep-translate1.p.rapidapi.com/language/translate/v2?key='.$q;

        $response = Http::withHeaders([
            'content-type' => 'application/json',
            'X-RapidAPI-Key' => 'd783f70ac8msh1d9637566ac541ap123b4ejsnea686ef4b1bf',
            'X-RapidAPI-Host' => 'deep-translate1.p.rapidapi.com'
        ])->withBody('{
             "q": "'.$q.'",
             "source": "'.$detect_result.'",
              "target": "tr"
            }',"raw")->post($url);


        $result = $response["data"]["translations"]["translatedText"];

        return view('front.search.search', compact('result', 'detect_result'));
    }
}
