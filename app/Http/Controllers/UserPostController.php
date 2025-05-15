<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('pages.user.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'author' => 'required',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $filename = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/image'), $filename);
            $imagePath = 'upload/image/' . $filename;
        }

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => $request->author,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'image' => $imagePath,
            'is_approved' => false
        ]);

        return redirect()->route('user.create')->with('success', 'Berita berhasil dikirim dan menunggu konfirmasi admin.');
    }
}