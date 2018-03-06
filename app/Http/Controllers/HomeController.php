<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class HomeController extends Controller
{
    public function index() {

        $instagram = new Instagram('555843552.1677ed0.9f1a7c4c883049bc83a327926cf9f352');
        $instagramArray = $instagram->get();
        $instagrams = array_slice ($instagramArray, 0, 6);
        
        return view('home/index', compact('instagrams'));
    }

    public function about() {
        
        return view('home/about');
    }


    public function locations() {
        $path = storage_path() . "/json/locations.json"; 
        $json = json_decode(file_get_contents($path), true); 

        return view('home/locations', compact('json'));
    }

    public function carousel() {
        return view('home/carousel');
    }

}
