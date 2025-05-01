<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Post::get();
        $type_menu = 'berita';
        return view('pages.berita.index', compact('type_menu', "datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_menu = 'berita';
        return view('pages.berita.create', compact('type_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd(request()->hasFile('pas_foto'));
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
        $imagePath = null;

        if (request()->hasFile('image')) {
            $gambar = $request->file('image');
            $filename = date('Ymd_His') . '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('upload/image'), $filename);
            $imagePath = 'upload/image/' . $filename;
            $gambar = $filename;
        }  
        // dd($gambar);
        //   dd($data['pas_foto']);
        Post::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'author_id' => auth()->id(),
            'category_id' => $request->category_id,
            'body' => $request->body,
            'image' => $imagePath,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.berita.edit', compact('berita', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
      
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer|exists:users,id',
            'slug' => 'required|string|max:255|unique:posts,slug,',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita = Post ::findOrFail($id);

        $berita->title = $request->title;
        $berita->author_id = $request->author_id;
        $berita->slug = $request->slug;

        $imagePath = $post->image;

        if ($request->hasFile('image')) {
            if (file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }
            

            $gambar = $request->file('image');
            $filename = date('Ymd_His') . '_' . uniqid() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('upload/image'), $filename);
            $imagePath = 'upload/image/' . $filename;
        }


        $post->update([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'slug' => \Str::slug($request->title),
            'body' => $request->body,
            'image' => $imagePath,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->image && file_exists(public_path($berita->image))) {
            unlink(public_path($berita->image));
        }

        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
