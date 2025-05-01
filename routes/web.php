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

// Halaman utama (umum, bisa diakses tanpa login)
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

// Login dan Logout
Route::middleware('ValidasiUser')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login.form');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'ValidasiUser'])->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/berita/index', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');


    
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/index', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
});
