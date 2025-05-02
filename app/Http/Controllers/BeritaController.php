<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $datas = Post::all();
        $type_menu = 'berita';
        return view('pages.berita.index', compact('type_menu', 'datas'));
    }

    public function create()
    {
        $type_menu = 'berita';
        $categories = Category::all();
        return view('pages.berita.create', compact('type_menu', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $gambar = $request->file('image');
            $filename = date('Ymd_His') . '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('upload/image'), $filename);
            $imagePath = 'upload/image/' . $filename;
        }

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'body' => $request->body,
            'image' => $imagePath,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $berita = Post::findOrFail($id);
        $categories = Category::all();
        return view('pages.berita.edit', compact('berita', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|integer',
        ]);
    
        $berita = Post::findOrFail($id);
    
        $berita->title = $request->title;
        $berita->author = $request->author;
        $berita->slug = $request->slug;
        $berita->body = $request->body;
        $berita->category_id = $request->category_id;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('upload/berita'), $imageName);
            $berita->image = $imageName;
        }
    
        $berita->save();
    
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Post::findOrFail($id);

        if ($berita->image && file_exists(public_path($berita->image))) {
            unlink(public_path($berita->image));
        }

        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}