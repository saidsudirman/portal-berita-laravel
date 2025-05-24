<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_menu = 'berita';
        $kategoris = Category::all();
        return view('pages.kategori.index', compact('type_menu', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_menu = 'kategori';
        return view('pages.kategori.create', compact('type_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'color' => ['required', 'string', 'max:20', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
        ], [
            'color.regex' => 'Format warna harus berupa kode hex seperti #ff0000 atau #fff.',
        ]);

        Category::create($request->only('name', 'description', 'color'));

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type_menu = 'kategori';
        $kategori = Category::findOrFail($id);
        return view('pages.kategori.edit', compact('type_menu', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'color' => ['required', 'string', 'max:20', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
        ], [
            'color.regex' => 'Format warna harus berupa kode hex seperti #ff0000 atau #fff.',
        ]);

        $kategori = Category::findOrFail($id);
        $kategori->update($request->only('name', 'description', 'color'));

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Category::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
