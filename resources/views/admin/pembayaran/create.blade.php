@extends('admin.layout')

@section('title','Tambah Pembayaran')
@section('page-title','Tambah Pembayaran')

@section('content')

<div class="content-card form-card">

    <h2 style="color:#713f55;">💳 Tambah Pembayaran</h2>

    @if($errors->any())
        <div style="
            background:#ffe1e9;
            color:#713f55;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        ">
            <strong>Terjadi kesalahan:</strong>

            <ul style="margin:8px 0 0 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pembayaran.store') }}" method="POST">

        @csrf

        {{-- PESANAN --}}
        <div class="form-group">

            <label>Pesanan</label>

            <select name="pesanan_id" required>

                <option value="">-- Pilih Pesanan --</option>

                @foreach($pesanans as $pesanan)

                    <option
                        value="{{ $pesanan->id }}"
                        {{ old('pesanan_id') == $pesanan->id ? 'selected' : '' }}
                    >
                        {{ $pesanan->kode_pesanan }}
                        —
                        {{ $pesanan->pelanggan->nama ?? 'Pelanggan' }}
                        —
                        {{ $pesanan->layanan->nama_layanan ?? 'Layanan' }}
                    </option>

                @endforeach

            </select>

        </div>


        {{-- TANGGAL BAYAR --}}
        <div class="form-group">

            <label>Tanggal Bayar</label>

            <input
                type="date"
                name="tanggal_bayar"
                value="{{ old('tanggal_bayar', date('Y-m-d')) }}"
                required
            >

        </div>


        {{-- JUMLAH --}}
        <div class="form-group">

            <label>Jumlah Pembayaran</label>

            <input
                type="number"
                name="jumlah"
                value="{{ old('jumlah') }}"
                min="0"
                required
                placeholder="Contoh: 100000"
            >

        </div>


        {{-- METODE --}}
        <div class="form-group">

            <label>Metode Pembayaran</label>

            <select name="metode" required>

                <option value="">-- Pilih Metode --</option>

                <option value="Cash"
                    {{ old('metode') == 'Cash' ? 'selected' : '' }}>
                    Cash
                </option>

                <option value="Transfer"
                    {{ old('metode') == 'Transfer' ? 'selected' : '' }}>
                    Transfer
                </option>

                <option value="QRIS"
                    {{ old('metode') == 'QRIS' ? 'selected' : '' }}>
                    QRIS
                </option>

            </select>

        </div>


        {{-- KETERANGAN --}}
        <div class="form-group">

            <label>Keterangan</label>

            <textarea
                name="keterangan"
                rows="4"
                placeholder="Contoh: DP pertama"
            >{{ old('keterangan') }}</textarea>

        </div>


        {{-- BUTTON --}}
        <button type="submit" class="button">
            💾 Simpan Pembayaran
        </button>

        <a
            href="{{ route('pembayaran.index') }}"
            class="button button-soft"
        >
            Kembali
        </a>

    </form>

</div>

@endsection