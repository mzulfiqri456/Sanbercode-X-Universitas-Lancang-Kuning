<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        Cast::create($validatedData);

        return redirect()->route('cast.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('cast.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $cast_id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        Cast::whereId($cast_id)->update($validatedData);

        return redirect()->route('cast.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        $cast->delete();

        return redirect()->route('cast.index')->with('success', 'Data berhasil dihapus');
    }
}
