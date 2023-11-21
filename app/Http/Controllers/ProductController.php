<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $jsonFile = storage_path('app/json/dummy-data.json');
        $products = json_decode(File::get($jsonFile), true);
        
        return view('pages.products', compact('products'));
    }
}
