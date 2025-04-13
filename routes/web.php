<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page 1    '])->name('WELCOME HOME');
});
Route::get('/cai', function () {
    return view('cai', ['title' => 'Cai', 'nama' => 'SAID SUDIRMAN']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by : ' . $user-> name, 'posts' => $user->posts]);

});
Route::get('/categories/{category:slug}', function(Category $category){
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => 'posts in categories: ' . $category-> name, 'posts' => $category->posts]);

});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/index', function () {
    return view('pages.dashboard.index'); // Ganti dengan tampilan dashboard
})->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

Route::get('/index', [DashboardController::class, 'index'])->name('events.index');