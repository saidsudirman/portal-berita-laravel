<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminController;

// Public Routes
Route::get('/', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))
            ->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page 1', 'nama' => 'SAID SUDIRMAN']);
});

Route::get('/informasi', function () {
    return view('cai', ['title' => 'Cai', 'nama' => 'INFORMASI KAMPUS']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles by : ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Posts in category: ' . $category->name,
        'posts' => $category->posts
    ]);
});

// Auth Routes
Route::get('/login', [AuthController::class, 'login'])->name('login.form')->middleware('ValidasiUser');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('ValidasiUser');

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout')->middleware('ValidasiUser');

// Dashboard


// Admin - Hanya untuk admin
Route::middleware(['auth', 'ValidasiUser'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('ValidasiUser');

    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');


    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
});
