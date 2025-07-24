<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $storages = Storage::all();
        return view('dashboard')->with('storages', $storages);
    }
}
