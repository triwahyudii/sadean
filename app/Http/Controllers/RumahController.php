<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rumah::all();
        return view('rumah.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rumah.create');
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

        Rumah::create($data);
        return redirect('/admin/rumah')->with('success', 'Data berhasil ditambahkan!');
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

    public function listRumah()
    {
        $data = Rumah::all();
        return view('rumah.list-rumah', compact(['data']));
    }

    public function details(string $id)
    {
        $data = Rumah::find($id);
        return view('rumah.details', compact(['data']));
    }

    public function gallery()
    {
        $data = Rumah::all();
        return view('rumah.gallery', compact(['data']));
    }
}
