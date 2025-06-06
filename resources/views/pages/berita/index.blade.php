@extends('layouts.app')

@section('title', 'Berita')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Total Berita</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Berita</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Berita</h2>
                <p class="section-lead">Portal Berita Universitas DIPA Makassar</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>Data Berita</h4>
                                <div class="d-flex">
                                    <form class="form-inline mr-2" method="GET" action="{{ route('berita.index') }}">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control" placeholder="Search Judul" value="{{ request('search') }}">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Penulis</th>
                                                <th>Slug</th>
                                                <th>Judul Berita</th>
                                                <th>Isi Berita</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Update</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($datas as $index => $berita)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $berita->author}}</td>
                                                    <td>{{ $berita->slug }}</td>
                                                    <td>{{ $berita->title }}</td>
                                                    <td>{{ $berita->body }}</td>
                                                    <td>{{ $berita->category->name ?? '-' }}</td>
                                                    <td>{{ $berita->updated_at->translatedFormat('l, d F Y') }}</td>
                                                    <td>
                                                        @if ($berita->image)
                                                            <img class="img img-fluid" width="150" src="{{ asset($berita->image) }}" alt="Gambar Berita">
                                                        @else
                                                            <span class="text-muted">Tidak ada gambar</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm mb-1">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center py-3 text-muted">Belum ada data berita.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @if (method_exists($datas, 'links'))
                                <div class="card-footer text-right">
                                    {{ $datas->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
