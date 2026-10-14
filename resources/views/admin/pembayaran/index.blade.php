@extends('admin.layout')

@section('title', 'Data Pembayaran')
@section('page-title', 'Data Pembayaran')

@section('content')

<div class="content-card">

    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:25px;
    ">

        <div>

            <h2 style="
                margin:0;
                color:#713f55;
            ">
                💳 Data Pembayaran
            </h2>

            <p style="
                margin:7px 0 0;
                color:#8a6b78;
            ">
                Kelola transaksi pembayaran pelanggan.
            </p>

        </div>

        <a
            href="{{ route('pembayaran.create') }}"
            class="button"
        >
            + Tambah Pembayaran
        </a>

    </div>


    {{-- PESAN SUKSES --}}
    @if(session('success'))

        <div style="
            background:#e1f0e6;
            color:#3f7050;
            padding:14px 18px;
            border-radius:12px;
            margin-bottom:20px;
        ">
            {{ session('success') }}
        </div>

    @endif


    {{-- ERROR --}}
    @if($errors->any())

        <div style="
            background:#ffe1e9;
            color:#713f55;
            padding:14px 18px;
            border-radius:12px;
            margin-bottom:20px;
        ">

            @foreach($errors->all() as $error)

                <div>{{ $error }}</div>

            @endforeach

        </div>

    @endif


    <div style="
        overflow-x:auto;
        border-radius:15px;
    ">

        <table style="
            width:100%;
            border-collapse:collapse;
        ">

            <thead>

                <tr style="
                    background:#f8e8ee;
                    color:#713f55;
                ">

                    <th style="padding:15px;">
                        No
                    </th>

                    <th style="padding:15px;">
                        Pesanan
                    </th>

                    <th style="padding:15px;">
                        Tanggal
                    </th>

                    <th style="padding:15px;">
                        Jumlah
                    </th>

                    <th style="padding:15px;">
                        Metode
                    </th>

                    <th style="padding:15px;">
                        Keterangan
                    </th>

                    <th style="padding:15px;">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($pembayarans as $pembayaran)

                    <tr style="
                        border-bottom:1px solid #f0dce4;
                    ">


                        {{-- NO --}}
                        <td style="
                            padding:15px;
                            text-align:center;
                        ">

                            {{ $loop->iteration }}

                        </td>


                        {{-- PESANAN --}}
                        <td style="padding:15px;">

                            <strong style="color:#713f55;">

                                {{ $pembayaran->pesanan->kode_pesanan ?? '-' }}

                            </strong>

                            <br>

                            <small style="color:#8a6b78;">

                                {{ $pembayaran->pesanan->pelanggan->nama ?? '-' }}

                            </small>

                        </td>


                        {{-- TANGGAL --}}
                        <td style="padding:15px;">

                            @if($pembayaran->tanggal_bayar)

                                {{ \Carbon\Carbon::parse(
                                    $pembayaran->tanggal_bayar
                                )->format('d-m-Y') }}

                            @else

                                -

                            @endif

                        </td>


                        {{-- JUMLAH --}}
                        <td style="
                            padding:15px;
                            font-weight:bold;
                            color:#713f55;
                        ">

                            Rp
                            {{ number_format(
                                (float) $pembayaran->jumlah,
                                0,
                                ',',
                                '.'
                            ) }}

                        </td>


                        {{-- METODE --}}
                        <td style="padding:15px;">

                            <span style="
                                background:#e1f0f6;
                                color:#527f91;
                                padding:7px 12px;
                                border-radius:20px;
                                font-size:13px;
                                font-weight:600;
                            ">

                                {{ $pembayaran->metode }}

                            </span>

                        </td>


                        {{-- KETERANGAN --}}
                        <td style="
                            padding:15px;
                            color:#6f5962;
                        ">

                            {{ $pembayaran->keterangan ?: '-' }}

                        </td>


                        {{-- AKSI --}}
                        <td style="
                            padding:15px;
                            white-space:nowrap;
                        ">

                            <a
                                href="{{ route(
                                    'pembayaran.edit',
                                    $pembayaran->id
                                ) }}"
                                style="
                                    display:inline-block;
                                    padding:8px 13px;
                                    background:#e1f0f6;
                                    color:#527f91;
                                    text-decoration:none;
                                    border-radius:8px;
                                    font-weight:600;
                                    margin-right:5px;
                                "
                            >
                                ✏️ Edit
                            </a>


                            <form
                                action="{{ route(
                                    'pembayaran.destroy',
                                    $pembayaran->id
                                ) }}"
                                method="POST"
                                style="display:inline;"
                                onsubmit="
                                    return confirm(
                                        'Yakin ingin menghapus pembayaran ini?'
                                    );
                                "
                            >

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    style="
                                        border:none;
                                        padding:8px 13px;
                                        background:#ffe1e9;
                                        color:#a64d68;
                                        border-radius:8px;
                                        font-weight:600;
                                        cursor:pointer;
                                    "
                                >
                                    🗑️ Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="7"
                            style="
                                padding:40px;
                                text-align:center;
                                color:#8a6b78;
                            "
                        >

                            💳 Belum ada data pembayaran.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection