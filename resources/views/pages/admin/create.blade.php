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
                            <form action="{{ route('admin.store') }}" method="POST" enctype = "multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Username</label>
                                        <input type="text"
                                            class="form-control"
                                            id="inputEmail4"
                                            name="username"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password"
                                            class="form-control"
                                            id="inputPassword4"
                                            name="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nama</label>
                                    <input type="text"
                                        class="form-control"
                                        id="inputAddress"
                                        name="name"
                                        placeholder="Nama Anda">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Email</label>
                                    <input type="email"
                                        class="form-control"
                                        id="inputAddress2"
                                        name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Foto</label>
                                    <div class="col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Pilih Foto</label>
                                            <input required type="file" name="pas_foto" id="image-upload">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
