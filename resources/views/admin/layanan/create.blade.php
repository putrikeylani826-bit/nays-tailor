@extends('admin.layout')

@section('title','Tambah Layanan')
@section('page-title','Tambah Layanan')

@section('content')

<div class="content-card form-card">

    <h2 style="color:#713f55;">✂️ Tambah Layanan</h2>
    <p style="color:#92707d;">
        Masukkan informasi layanan jahit.
    </p>

    <form action="{{ route('layanan.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label>Nama Layanan</label>

            <input type="text"
                   name="nama_layanan"
                   value="{{ old('nama_layanan') }}"
                   placeholder="Contoh: Jahit Dress Anak"
                   required>

            @error('nama_layanan')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Harga</label>

            <input type="number"
                   name="harga"
                   value="{{ old('harga') }}"
                   placeholder="Contoh: 75000"
                   required>
        </div>

        <div class="form-group">
            <label>Deskripsi</label>

            <textarea name="deskripsi"
                      placeholder="Deskripsi layanan">{{ old('deskripsi') }}</textarea>
        </div>

        <div class="form-group">
            <label>Status</label>

            <select name="status" required>

                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>

            </select>

        </div>

        <button class="button">
            💾 Simpan Layanan
        </button>

        <a href="{{ route('layanan.index') }}"
           class="button button-soft">
            Kembali
        </a>

    </form>

</div>

@endsection