@extends('layouts.app')

@section('title', 'Tambah Kategori')

@push('style')
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Kategori</div>
                    <div class="breadcrumb-item">Tambah</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Kategori</h4>
                            </div>
                            <form action="{{ route('kategori.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama Kategori</label>
                                        <input type="text"
                                               name="name"
                                               id="name"
                                               class="form-control @error('name') is-invalid @enderror"
                                               value="{{ old('name') }}"
                                               required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="color">Warna Kategori</label>
                                        <input type="color"
                                            name="color"
                                            id="color"
                                            class="form-control @error('color') is-invalid @enderror"
                                            value="{{ old('color', '#ff0000') }}"  <!-- default value -->
                                            required>
                                        @error('color')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
