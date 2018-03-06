<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{
    
    public function instagramFeed() {
        
        $instagram = new Instagram('555843552.1677ed0.9f1a7c4c883049bc83a327926cf9f352');
        $instagrams = $instagram->get();
        //dd($instagrams);
        //dd($instagrams[0]->images->standard_resolution->url);

        return view('instagram/index', compact('instagrams'));
    }
}
