@extends('layouts.app')

@section('title', 'Admin')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Total Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Admin</h2>
                <p class="section-lead">Portal Berita Universitas DIPA Makassar</p>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Admin</h4>
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
                                <a href="{{ route('admin.create') }}">
                                    <button class="btn btn-primary">Tambah Data</button>
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Paswword</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $index => $admin)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $admin->name }}</td>
                                                    <td class="align-middle">{{ $admin->email }}</td>
                                                    <td>{{ $admin->username }}</td>
                                                    <td>{{ $admin->password }}</td>
                                                    <td>
                                                        <img class="img img-fluid" width="200"
                                                            src="{{ asset('upload/pas_foto/' . $admin->pas_foto) }}"
                                                            alt="Pas Foto Guru">
                                                        
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.edit', $admin->id) }}"
                                                            class="btn btn-warning my-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus admin ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
    <script>
         $(document).ready(function () {
            $('#table-admin').DataTable();
        });

        function deleteData(id, endpoint) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: `/${endpoint}/${id}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert('Data berhasil dihapus.');
                        location.reload();
                    },
                    error: function (error) {
                        alert('Terjadi kesalahan saat menghapus data.');
                    }
                });
            }
        }

        function verifikasi(id, endpoint) {
            if (confirm('Apakah Anda yakin ingin memverifikasi data ini?')) {
                $.ajax({
                    url: `/${endpoint}/verifikasi/${id}`,
                    type: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        alert('Data berhasil diverifikasi.');
                        location.reload();
                    },
                    error: function (error) {
                        alert('Terjadi kesalahan saat memverifikasi data.');
                    }
                });
            }
        }
    </script>

@endpush
