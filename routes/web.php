<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/cai', function () {
    return view('cai', ['title' => 'Cai', 'nama' => 'PI + PI = PIPI']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Judul-undipa-1',
            'title' => 'UNDIPA TODAY 1',
            'author' => 'Said',
            'body' => 'Penerimaan Mahasiswa Baru 2025: Universitas Dipa Makassar telah membuka pendaftaran bagi calon mahasiswa baru untuk gelombang pertama tahun 2025. Manfaat yang ditawarkan antara lain bebas biaya formulir pendaftaran dan kesempatan merasakan pengalaman virtual reality. '
        ],
        [
            'id' => 2,
            'slug' => 'Judul-undipa-2',
            'title' => 'UNDIPA TODAY 2',
            'author' => 'Caiii',
            'body' => 'Pemutusan Hubungan Kerja Staf Terlibat Pelecehan Seksual: Universitas Dipa Makassar mengambil tindakan tegas dengan memecat seorang staf yang terlibat dalam kasus pelecehan seksual terhadap seorang alumni. Kejadian ini terekam oleh CCTV di perpustakaan universitas'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'Judul-undipa-1',
            'title' => 'UNDIPA TODAY 1',
            'author' => 'Said',
            'body' => 'Penerimaan Mahasiswa Baru 2025: Universitas Dipa Makassar telah membuka pendaftaran bagi calon mahasiswa baru untuk gelombang pertama tahun 2025. Manfaat yang ditawarkan antara lain bebas biaya formulir pendaftaran dan kesempatan merasakan pengalaman virtual reality. '
        ],
        [
            'id' => 2,
            'slug' => 'Judul-undipa-2',
            'title' => 'UNDIPA TODAY 2',
            'author' => 'Caiii',
            'body' => 'Pemutusan Hubungan Kerja Staf Terlibat Pelecehan Seksual: Universitas Dipa Makassar mengambil tindakan tegas dengan memecat seorang staf yang terlibat dalam kasus pelecehan seksual terhadap seorang alumni. Kejadian ini terekam oleh CCTV di perpustakaan universitas'
        ]
    ];

    $post = Arr ::first($posts, function ($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});