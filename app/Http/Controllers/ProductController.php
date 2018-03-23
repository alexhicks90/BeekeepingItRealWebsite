<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $path = storage_path() . "/json/products.json"; 
        $json = json_decode(file_get_contents($path), true); 
        return view('/products/index', compact('json'));
    }

    public function honey() {
        $path = storage_path() . "/json/honey.json"; 
        $json = json_decode(file_get_contents($path), true); 
        return view('/products/honey', compact('json'));
    }

    public function beeswax() {
        $path = storage_path() . "/json/beeswax.json"; 
        $json = json_decode(file_get_contents($path), true); 
        return view('/products/beeswax', compact('json'));
    }

    public function pollen() {
        $path = storage_path() . "/json/pollen.json"; 
        $json = json_decode(file_get_contents($path), true); 
        return view('/products/pollen', compact('json'));
    }
}
