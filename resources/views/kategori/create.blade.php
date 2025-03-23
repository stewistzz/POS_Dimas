@extends('layouts.template')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">
                <i class="fas fa-plus-circle"></i> {{ $page->title }}
            </h3>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ url('kategori') }}">
                @csrf
                <div class="mb-3">
                    <label for="kategori_kode" class="form-label fw-bold">Kode Kategori</label>
                    <input type="text" name="kategori_kode" id="kategori_kode" class="form-control" 
                        placeholder="Masukkan kode kategori" required>
                </div>

                <div class="mb-3">
                    <label for="kategori_nama" class="form-label fw-bold">Nama Kategori</label>
                    <input type="text" name="kategori_nama" id="kategori_nama" class="form-control" 
                        placeholder="Masukkan nama kategori" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ url('kategori') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
