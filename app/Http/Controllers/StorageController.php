<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storage = Storage::create([
            'name' => $request->name
        ]);

        event(new Registered($storage));

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Storage $storage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Storage $storage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storage $storage)
    {
        //
    }
}
