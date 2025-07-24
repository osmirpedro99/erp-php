<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Storage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $storages = Storage::all();
        $products = Product::all();
        return view('dashboard')->with(['storages' => $storages, 'products' => $products]);
    }
}
