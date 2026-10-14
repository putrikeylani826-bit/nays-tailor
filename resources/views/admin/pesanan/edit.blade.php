<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Pesanan - Nays Tailor</title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #FFF4F7;
            color: #4F3740;
        }


        .page {
            min-height: 100vh;
            padding: 40px;
        }


        .container {
            max-width: 950px;
            margin: auto;
        }


        .card {
            background: white;
            border-radius: 22px;
            padding: 35px;

            box-shadow:
                0 10px 35px
                rgba(113, 59, 80, .10);
        }


        .header {
            margin-bottom: 30px;
        }


        .header h1 {
            margin: 0 0 8px;

            color: #713B50;

            font-family: Georgia, serif;

            font-size: 30px;
        }


        .header p {
            margin: 0;

            color: #8B6875;
        }


        .error {
            background: #FFF0F2;

            color: #9B3D55;

            border:
                1px solid
                #F1B5C2;

            padding: 15px 18px;

            border-radius: 12px;

            margin-bottom: 20px;
        }


        .error ul {
            margin:
                8px 0 0 20px;
        }


        .form-grid {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 22px;
        }


        .form-group {
            display: flex;

            flex-direction: column;
        }


        .full {
            grid-column: 1 / -1;
        }


        label {
            font-weight: bold;

            color: #713B50;

            margin-bottom: 8px;
        }


        input,
        select {

            width: 100%;

            padding:
                13px 15px;

            border:
                1px solid
                #E6CDD6;

            border-radius: 12px;

            background: #FFFAFB;

            color: #4F3740;

            font-size: 14px;

            outline: none;
        }


        input:focus,
        select:focus {

            border-color:
                #F28FA9;

            box-shadow:
                0 0 0 3px
                rgba(242,143,169,.12);
        }


        .help {

            font-size: 12px;

            color: #987783;

            margin-top: 6px;
        }


        .kode-box {

            background: #F0DCE4;

            border-radius: 12px;

            padding: 13px 15px;

            color: #713B50;

            font-weight: bold;
        }


        .buttons {

            margin-top: 30px;

            padding-top: 25px;

            border-top:
                1px solid
                #F1E1E6;

            display: flex;

            justify-content: flex-end;

            gap: 12px;
        }


        .btn {

            border: none;

            border-radius: 12px;

            padding:
                13px 24px;

            font-size: 14px;

            font-weight: bold;

            cursor: pointer;

            text-decoration: none;

            display: inline-block;
        }


        .btn-save {

            background: #F28FA9;

            color: white;
        }


        .btn-save:hover {

            background: #E97895;
        }


        .btn-back {

            background: #E1F0F6;

            color: #542C3D;
        }


        .btn-back:hover {

            background: #A9C7D8;
        }


        @media (max-width: 700px) {

            .page {
                padding: 15px;
            }


            .card {
                padding: 22px;
            }


            .form-grid {
                grid-template-columns: 1fr;
            }


            .full {
                grid-column: auto;
            }


            .buttons {

                flex-direction: column;
            }


            .btn {
                text-align: center;
            }

        }

    </style>

</head>


<body>


<div class="page">

    <div class="container">

        <div class="card">


            <div class="header">

                <h1>
                    ✏️ Edit Pesanan
                </h1>

                <p>
                    Perbarui data pesanan pelanggan Nays Tailor.
                </p>

            </div>


            {{-- PESAN ERROR --}}

            @if ($errors->any())

                <div class="error">

                    <strong>
                        Data belum dapat disimpan:
                    </strong>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- FORM EDIT --}}

            <form
                action="{{ route('pesanan.update', $pesanan->id) }}"
                method="POST"
            >

                @csrf

                @method('PUT')


                <div class="form-grid">


                    {{-- KODE PESANAN --}}

                    <div class="form-group full">

                        <label>
                            Kode Pesanan
                        </label>

                        <div class="kode-box">

                            {{ $pesanan->kode_pesanan }}

                        </div>

                        <span class="help">

                            Kode pesanan dibuat otomatis
                            dan tidak dapat diubah.

                        </span>

                    </div>


                    {{-- PELANGGAN --}}

                    <div class="form-group full">

                        <label for="pelanggan_id">
                            Pelanggan
                        </label>

                        <select
                            name="pelanggan_id"
                            id="pelanggan_id"
                            required
                        >

                            <option value="">
                                -- Pilih Pelanggan --
                            </option>


                            @foreach ($pelanggans as $pelanggan)

                                <option
                                    value="{{ $pelanggan->id }}"

                                    {{ old(
                                        'pelanggan_id',
                                        $pesanan->pelanggan_id
                                    ) == $pelanggan->id
                                        ? 'selected'
                                        : ''
                                    }}
                                >

                                    {{ $pelanggan->nama }}

                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- LAYANAN --}}

                    <div class="form-group full">

                        <label for="layanan_id">
                            Layanan
                        </label>


                        <select
                            name="layanan_id"
                            id="layanan_id"
                            required
                        >

                            <option value="">
                                -- Pilih Layanan --
                            </option>


                            @foreach ($layanans as $layanan)

                                <option

                                    value="{{ $layanan->id }}"

                                    data-harga="{{ $layanan->harga_mulai }}"

                                    {{ old(
                                        'layanan_id',
                                        $pesanan->layanan_id
                                    ) == $layanan->id
                                        ? 'selected'
                                        : ''
                                    }}
                                >

                                    {{ $layanan->nama_layanan }}

                                    -
                                    
                                    Rp
                                    {{ number_format(
                                        $layanan->harga_mulai,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </option>

                            @endforeach

                        </select>


                        <span class="help">

                            Harga akan otomatis mengikuti
                            layanan jika layanan diganti.

                        </span>

                    </div>


                    {{-- TANGGAL MASUK --}}

                    <div class="form-group">

                        <label for="tanggal_masuk">
                            Tanggal Masuk
                        </label>

                        <input
                            type="date"

                            name="tanggal_masuk"

                            id="tanggal_masuk"

                            value="{{ old(
                                'tanggal_masuk',
                                $pesanan->tanggal_masuk
                                    ? $pesanan->tanggal_masuk->format('Y-m-d')
                                    : ''
                            ) }}"

                            required
                        >

                    </div>


                    {{-- TANGGAL SELESAI --}}

                    <div class="form-group">

                        <label for="tanggal_selesai">
                            Tanggal Selesai
                        </label>

                        <input
                            type="date"

                            name="tanggal_selesai"

                            id="tanggal_selesai"

                            value="{{ old(
                                'tanggal_selesai',
                                $pesanan->tanggal_selesai
                                    ? $pesanan->tanggal_selesai->format('Y-m-d')
                                    : ''
                            ) }}"
                        >

                    </div>


                    {{-- HARGA --}}

                    <div class="form-group">

                        <label for="harga">
                            Harga
                        </label>

                        <input
                            type="number"

                            name="harga"

                            id="harga"

                            value="{{ old(
                                'harga',
                                $pesanan->harga
                            ) }}"

                            min="0"

                            step="0.01"

                            placeholder="Contoh: 150000"

                            required
                        >

                        <span class="help">
                            Total harga pesanan.
                        </span>

                    </div>


                    {{-- DP --}}

                    <div class="form-group">

                        <label for="dp">
                            DP
                        </label>

                        <input
                            type="number"

                            name="dp"

                            id="dp"

                            value="{{ old(
                                'dp',
                                $pesanan->dp
                            ) }}"

                            min="0"

                            step="0.01"

                            placeholder="Contoh: 50000"

                            required
                        >

                        <span class="help">
                            Isi 0 jika belum ada DP.
                        </span>

                    </div>


                    {{-- STATUS --}}

                    <div class="form-group full">

                        <label for="status">
                            Status Pesanan
                        </label>


                        <select
                            name="status"
                            id="status"
                            required
                        >

                            <option value="">
                                -- Pilih Status --
                            </option>


                            <option
                                value="Menunggu"

                                {{ old(
                                    'status',
                                    $pesanan->status
                                ) == 'Menunggu'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Menunggu
                            </option>


                            <option
                                value="Diproses"

                                {{ old(
                                    'status',
                                    $pesanan->status
                                ) == 'Diproses'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Diproses
                            </option>


                            <option
                                value="Selesai"

                                {{ old(
                                    'status',
                                    $pesanan->status
                                ) == 'Selesai'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Selesai
                            </option>


                            <option
                                value="Diambil"

                                {{ old(
                                    'status',
                                    $pesanan->status
                                ) == 'Diambil'
                                    ? 'selected'
                                    : ''
                                }}
                            >
                                Diambil
                            </option>

                        </select>

                    </div>


                </div>


                {{-- TOMBOL --}}

                <div class="buttons">

                    <a
                        href="{{ route('pesanan.index') }}"
                        class="btn btn-back"
                    >
                        ← Kembali
                    </a>


                    <button
                        type="submit"
                        class="btn btn-save"
                    >
                        💾 Simpan Perubahan
                    </button>

                </div>


            </form>

        </div>

    </div>

</div>


<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const layanan =
            document.getElementById('layanan_id');

        const harga =
            document.getElementById('harga');


        layanan.addEventListener(
            'change',
            function () {

                const selected =
                    this.options[
                        this.selectedIndex
                    ];


                const hargaLayanan =
                    selected.getAttribute(
                        'data-harga'
                    );


                if (hargaLayanan) {

                    harga.value =
                        hargaLayanan;

                }

            }
        );

    }
);

</script>


</body>

</html>