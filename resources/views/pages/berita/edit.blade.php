@extends('layouts.app')

@section('title', 'Create')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Form</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Forms</h2>
                <p class="section-lead">
                    Examples and usage guidelines for form control styles, layout options, and custom components for
                    creating a wide variety of forms.
                </p>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h4>Horizontal Form</h4>
                            </div>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                    
                                            <div class="card">
                                                <div class="card-body">
                    
                                                    <div class="form-group">
                                                        <label for="name">Nama</label>
                                                        <input name="name" value="{{ old('name', $admin->name) }}" type="text"
                                                            class="form-control @error('name') is-invalid @enderror" id="name">
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input name="username" value="{{ old('username', $admin->username) }}" type="text"
                                                            class="form-control @error('username') is-invalid @enderror" id="username">
                                                        @error('username')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input name="email" value="{{ old('email', $admin->email) }}" type="email"
                                                            class="form-control @error('email') is-invalid @enderror" id="email">
                                                        @error('email')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="password">Password (isi jika ingin mengubah)</label>
                                                        <input name="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror" id="password">
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="pas_foto">Pas Foto</label>
                                                        <input type="file" name="pas_foto"
                                                            class="form-control @error('pas_foto') is-invalid @enderror" id="pas_foto">
                                                        @error('pas_foto')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                    
                                                        @if($admin->pas_foto)
                                                            <div class="mt-2">
                                                                <img src="{{ asset('upload/pas_foto/' . $admin->pas_foto) }}" alt="Foto" width="120">
                                                            </div>
                                                        @endif
                                                    </div>
                    
                                                </div>
                    
                                                <div class="card-footer text-right">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <a href="{{ route('admin.index') }}" class="btn btn-warning">Kembali</a>
                                                </div>
                                            </div>
                    
                                        </form>
                                    </div>
                                </div>
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

    <!-- Page Specific JS File -->
@endpush
