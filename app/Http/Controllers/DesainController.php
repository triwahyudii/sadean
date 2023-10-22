<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Desain;
use Illuminate\Http\Request;

class DesainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Desain::all();
        return view('desain.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('desain.create');
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
        \Image::make($file)->save(public_path('/') . $fileName);
        $data['images'] = $fileName;

        Desain::create($data);
        return redirect('/admin/desain')->with('success', 'Data berhasil ditambahkan!');
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

    public function listDesain()
    {
        $data = Desain::all();
        return view('desain.list-desain', compact(['data']));
    }

    public function details($id)
    {
        $data = Desain::find($id);
        return view('desain.details', compact(['data']));
    }

    public function gallery()
    {
        $data = Desain::all();
        return view('desain.gallery', compact(['data']));
    }
}
