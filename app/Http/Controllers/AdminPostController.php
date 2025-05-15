<?php

namespace App\Http\Controllers;

use App\Models\Post;

class AdminPostController extends Controller
{
    public function pending()
    {
        $posts = Post::where('is_approved', false)->get();
        return view('pages.post.pending', compact('posts'));
    }

    public function approve($id)
    {
        $post = Post::findOrFail($id);
        $post->update(['is_approved' => true]);
        return redirect()->back()->with('success', 'Berita berhasil disetujui.');
    }
}