<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use App\Models\Storage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $storages = Storage::all();
        $products = Product::all();
        $cupons = Coupon::all();
        
        return view('dashboard')->with(['storages' => $storages, 'products' => $products, 'coupons' => $cupons]);
    }
}
