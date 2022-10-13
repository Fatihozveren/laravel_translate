<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.search.search');
    }
    public function result(){
        return view('front.search.search');
    }
}
