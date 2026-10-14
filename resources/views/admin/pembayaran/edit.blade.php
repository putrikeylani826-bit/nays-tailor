@extends('admin.layout')

@section('title', 'Edit Pembayaran')
@section('page-title', 'Edit Pembayaran')

@section('content')

<div class="content-card form-card">

    {{-- HEADER --}}
    <div style="margin-bottom:25px;">

        <h2 style="
            margin:0;
            color:#713f55;
        ">
            💳 Edit Pembayaran
        </h2>

        <p style="
            margin-top:7px;
            color:#8a6b78;
        ">
            Perbarui data pembayaran pelanggan.
        </p>

    </div>


    {{-- PESAN ERROR --}}
    @if($errors->any())

        <div style="
            background:#ffe1e9;
            color:#713f55;
            padding:15px 18px;
            border-radius:12px;
            margin-bottom:20px;
        ">

            <strong>Terjadi kesalahan:</strong>

            <ul style="
                margin:8px 0 0 20px;
            ">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- FORM --}}
    <form
        action="{{ route('pembayaran.update', $pembayaran->id) }}"
        method="POST"
    >

        @csrf

        @method('PUT')


        {{-- ========================= --}}
        {{-- PESANAN --}}
        {{-- ========================= --}}

        <div class="form-group">

            <label>Pesanan</label>

            <select
                name="pesanan_id"
                required
            >

                <option value="">
                    -- Pilih Pesanan --
                </option>

                @foreach($pesanans as $pesanan)

                    <option
                        value="{{ $pesanan->id }}"

                        {{ old(
                            'pesanan_id',
                            $pembayaran->pesanan_id
                        ) == $pesanan->id
                            ? 'selected'
                            : ''
                        }}
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


        {{-- ========================= --}}
        {{-- TANGGAL BAYAR --}}
        {{-- ========================= --}}

        <div class="form-group">

            <label>Tanggal Bayar</label>

            @php

                $tanggalBayar = $pembayaran->tanggal_bayar;

                if ($tanggalBayar) {

                    $tanggalBayar = date(
                        'Y-m-d',
                        strtotime($tanggalBayar)
                    );

                }

            @endphp

            <input
                type="date"
                name="tanggal_bayar"
                value="{{ old('tanggal_bayar', $tanggalBayar) }}"
                required
            >

        </div>


        {{-- ========================= --}}
        {{-- JUMLAH --}}
        {{-- ========================= --}}

        <div class="form-group">

            <label>Jumlah Pembayaran</label>

            <input
                type="number"
                name="jumlah"
                value="{{ old('jumlah', $pembayaran->jumlah) }}"
                min="0"
                required
                placeholder="Contoh: 100000"
            >

        </div>


        {{-- ========================= --}}
        {{-- METODE PEMBAYARAN --}}
        {{-- ========================= --}}

        <div class="form-group">

            <label>Metode Pembayaran</label>

            <select
                name="metode"
                required
            >

                <option value="">
                    -- Pilih Metode --
                </option>

                <option
                    value="Cash"
                    {{ old(
                        'metode',
                        $pembayaran->metode
                    ) == 'Cash'
                        ? 'selected'
                        : ''
                    }}
                >
                    Cash
                </option>

                <option
                    value="Transfer"
                    {{ old(
                        'metode',
                        $pembayaran->metode
                    ) == 'Transfer'
                        ? 'selected'
                        : ''
                    }}
                >
                    Transfer
                </option>

                <option
                    value="QRIS"
                    {{ old(
                        'metode',
                        $pembayaran->metode
                    ) == 'QRIS'
                        ? 'selected'
                        : ''
                    }}
                >
                    QRIS
                </option>

            </select>

        </div>


        {{-- ========================= --}}
        {{-- KETERANGAN --}}
        {{-- ========================= --}}

        <div class="form-group">

            <label>Keterangan</label>

            <textarea
                name="keterangan"
                rows="4"
                placeholder="Contoh: DP pertama"
            >{{ old('keterangan', $pembayaran->keterangan) }}</textarea>

        </div>


        {{-- ========================= --}}
        {{-- TOMBOL --}}
        {{-- ========================= --}}

        <div style="
            display:flex;
            gap:10px;
            margin-top:25px;
        ">

            <button
                type="submit"
                class="button"
            >
                💾 Simpan Perubahan
            </button>


            <a
                href="{{ route('pembayaran.index') }}"
                class="button button-soft"
            >
                ← Kembali
            </a>

        </div>

    </form>

</div>

@endsection