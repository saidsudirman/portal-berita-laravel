@extends('layouts.app')

@section('title', 'Kategori')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Kategori Berita</h2>
                <p class="section-lead">Portal Berita Universitas DIPA Makassar</p>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Kategori</h4>
                                <div class="card-header-form mr-4">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('kategori.create') }}">
                                    <button class="btn btn-primary">Tambah Data</button>
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th class="p-0 text-center">
                                                No
                                            </th>
                                            <th class="p-0 text-center">Nama Kategori</th>
                                            <th class="p-0 text-center">Action</th>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">1</td>
                                            <td class="p-0 text-center">Akademik Kampus</td>
                                            <td class="p-0 text-center">
                                                <button class="btn btn-primary"
                                                data-toggle="modal"
                                                data-target="#exampleModal">Edit</button>
                                                {{-- <a href="#" class="btn btn-warning">Edit</a> --}}
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Status Kategori</h5>
                    <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body">
                            <div class="form-group">
                                <label>Kategori</label>
                                <div class="input-group">
                                    <select class="form-control" name>
                                        <option>UKM</option>
                                        <option>Ricuh</option>
                                        <option>Skandal</option>
                                        <option>Akdemik Kampus</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit"
                            class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>

@endpush
