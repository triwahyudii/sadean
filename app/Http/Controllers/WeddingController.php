<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Wedding::all();
        return view('wedding.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wedding.create');
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
            'images' => 'required|file|image|mimes:png,jpg,jpeg,svg|max:5048'
        ]);

        $file = $request->file('images');
        $fileName = uniqid() .  '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/', $fileName);
        $data['images'] = $fileName;

        Wedding::create($data);
        return redirect('/admin/wedding')->with('success', 'Data berhasil ditambahkan!');
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

    public function listWedding() 
    {
        $data = Wedding::all();
        return view('wedding.list-wedding', compact(['data']));
    }

    public function details($id)
    {
        $data = Wedding::find($id);
        return view('wedding.details', compact(['data']));
    }

    public function gallery()
    {
        $data = Wedding::all();
        return view('wedding.gallery', compact(['data']));
    }
}
