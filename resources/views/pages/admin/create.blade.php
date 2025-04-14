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
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Username</label>
                                        <input type="email"
                                            class="form-control"
                                            id="inputEmail4"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password"
                                            class="form-control"
                                            id="inputPassword4"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nama</label>
                                    <input type="text"
                                        class="form-control"
                                        id="inputAddress"
                                        placeholder="Nama Anda">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Email</label>
                                    <input type="text"
                                        class="form-control"
                                        id="inputAddress2"
                                        placeholder="Email">
                                </div>
                                {{-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text"
                                            class="form-control"
                                            id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState"
                                            class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text"
                                            class="form-control"
                                            id="inputZip">
                                    </div>
                                </div> --}}
                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input"
                                            type="checkbox"
                                            id="gridCheck">
                                        <label class="form-check-label"
                                            for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary">Submit</button>
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
