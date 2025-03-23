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
            <form method="POST" action="{{ url('supplier') }}">
                @csrf
                <div class="mb-3">
                    <label for="supplier_kode" class="form-label fw-bold">Kode supplier</label>
                    <input type="text" name="supplier_kode" id="supplier_kode" class="form-control" 
                        placeholder="Masukkan kode supplier" required>
                </div>

                <div class="mb-3">
                    <label for="supplier_nama" class="form-label fw-bold">Nama supplier</label>
                    <input type="text" name="supplier_nama" id="supplier_nama" class="form-control" 
                        placeholder="Masukkan nama supplier" required>
                </div>
                <div class="mb-3">
                    <label for="supplier_alamat" class="form-label fw-bold">alamat supplier</label>
                    <input type="text" name="supplier_alamat" id="supplier_alamat" class="form-control" 
                        placeholder="Masukkan alamat supplier" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ url('supplier') }}" class="btn btn-secondary me-2">
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
