@extends('layouts.app')

@section('title', 'Edit Berita')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Edit Berita</h2>
            <p class="section-lead">Perbarui informasi berita di bawah ini.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="title">Judul Berita</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $berita->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="author">Penulis</label>
                                    <input type="text" name="author" id="author"
                                        class="form-control @error('author') is-invalid @enderror"
                                        value="{{ old('author', $berita->author) }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" id="slug"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        value="{{ old('slug', $berita->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="body">Isi Berita</label>
                                    <textarea name="body" id="body" rows="5"
                                        class="form-control @error('body') is-invalid @enderror"
                                        required>{{ old('body', $berita->body) }}</textarea>
                                    @error('body')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    @if ($berita->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('upload/berita/' . $berita->image) }}" alt="Gambar Berita" width="150">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" id="category_id"
                                        class="form-control @error('category_id') is-invalid @enderror" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="1" @selected(old('category_id', $berita->category_id) == 1)>UKM</option>
                                        <option value="2" @selected(old('category_id', $berita->category_id) == 2)>Ricuh</option>
                                        <option value="3" @selected(old('category_id', $berita->category_id) == 3)>Skandal</option>
                                        <option value="4" @selected(old('category_id', $berita->category_id) == 4)>Akademik Kampus</option>
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Update Berita</button>
                                    <a href="{{ route('berita.index') }}" class="btn btn-warning">Kembali</a>
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
    <!-- JS Libraries -->
@endpush
