<?php

namespace App\Http\Controllers;

use App\Models\Gorden;
use Illuminate\Http\Request;

class GordenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Gorden::all();
        return view('gorden.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gorden.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'image' => 'required|file|image|mimes:png,jpg,jpeg,svg|max:5048'
        ]);

        $file = $request->file('image');
        $fileName = uniqid().  '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/', $fileName);
        $data['image'] = $fileName;
        
        Gorden::create($data);
        return redirect('/admin/gorden')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function listGorden() 
    {
        $data = Gorden::all();
        return view('gorden.listGorden', compact(['data']));
    }
}
