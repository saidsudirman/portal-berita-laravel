<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder untuk kategori dan user
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::create([
            'title' => 'Berita Pertama',
            'slug' => 'berita-pertama',
            'author' => 'CAIII',
            'category_id' => Category::first()->id, // Menyambungkan dengan kategori pertama
            'body' => 'Ini adalah konten berita pertama.',
            'image' => 'caiiii.jpg', // Jika ada gambar, masukkan path gambar
        ]);
    }
}
