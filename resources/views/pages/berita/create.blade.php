@extends('layouts.app')

@section('title', 'Create Berita')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Tambah Berita</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Berita</a></div>
                    <div class="breadcrumb-item">Tambah Berita</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tambah Berita</h2>
                <p class="section-lead">
                    Isi form berikut untuk menambah berita baru.
                </p>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Berita</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('berita.store') }}" method="POST" enctype = "multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="title">Judul Berita</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Judul Berita" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="author">Penulis</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') }}" placeholder="Nama Penulis" required>
                                        @error('author')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Slug Berita" required>
                                        @error('slug')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Isi Berita</label>
                                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="4" placeholder="Isi Berita" required>{{ old('body') }}</textarea>
                                        @error('body')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Kategori</label>
                                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="1" @if(old('category_id') == 1) selected @endif>UKM</option>
                                            <option value="2" @if(old('category_id') == 2) selected @endif>Ricuh</option>
                                            <option value="3" @if(old('category_id') == 3) selected @endif>Skandal</option>
                                            <option value="4" @if(old('category_id') == 4) selected @endif>Akademik Kampus</option>
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Tambah Berita</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
@endpush
