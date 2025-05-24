@extends('layouts.app')

@section('title', 'Edit Kategori')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></div>
                <div class="breadcrumb-item">Edit</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Edit Kategori</h2>
            <p class="section-lead">Perbarui informasi kategori di bawah ini.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit</h4>
                        </div>
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Kategori</label>
                                    <input type="text" name="name" id="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name', $kategori->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" rows="4"
                                              class="form-control @error('description') is-invalid @enderror">{{ old('description', $kategori->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="color">Warna</label>
                                    <input type="color" name="color" id="color"
                                           class="form-control @error('color') is-invalid @enderror"
                                           value="{{ old('color', $kategori->color ?? '#000000') }}">
                                    @error('color')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Update Kategori</button>
                                <a href="{{ route('kategori.index') }}" class="btn btn-warning">Kembali</a>
                            </div>
                        </form>
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
