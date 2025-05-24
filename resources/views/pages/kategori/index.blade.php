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
                    <div class="breadcrumb-item">Kategori</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Kategori Berita</h2>
                <p class="section-lead">Portal Berita Universitas DIPA Makassar</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>Data Kategori</h4>
                                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Data</a>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Kategori</th>
                                                <th class="text-center">Warna</th>
                                                <th class="text-center">Slug</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kategoris as $index => $kategori)
                                                <tr>
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td class="text-center d-flex align-items-center justify-content-center">
                                                        <span 
                                                          style="display:inline-block; width: 20px; height: 20px; background-color: {{ $kategori->color }}; margin-right: 8px; border: 1px solid #ccc;">
                                                        </span> 
                                                        {{ $kategori->name }}
                                                    </td>
                                                    <td class="text-center">{{ $kategori->color }}</td>
                                                    <td class="text-center">{{ $kategori->slug }}</td>
                                                    <td>
                                                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning btn-sm mb-1">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus Kategori ini?');">
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
                                                    <td colspan="5" class="text-center">Belum ada data kategori.</td>
                                                </tr>
                                            @endforelse
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
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
@endpush
