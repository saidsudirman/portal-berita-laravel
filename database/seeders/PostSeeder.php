<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
            'body' => $request->body,
            'image' => $imagePath,
        ]);
    }
}
