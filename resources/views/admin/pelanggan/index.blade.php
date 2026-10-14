<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pelanggan - Nays Tailor</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background: #fff8fb;
            color: #4b3440;
        }

        .container {
            padding: 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        h1 {
            margin: 0;
            font-family: 'Playfair Display', serif;
            color: #6f3d55;
            font-size: 32px;
        }

        .subtitle {
            margin-top: 7px;
            color: #967383;
        }

        .button-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn {
            background: #814761;
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn:hover {
            background: #6f3d55;
        }

        .btn-back {
            background: #ead7df;
            color: #6f3d55;
            padding: 12px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-back:hover {
            background: #dfc4cf;
        }

        .card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 8px 30px rgba(111, 61, 85, .08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f8eaf0;
            color: #6f3d55;
            text-align: left;
            padding: 15px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #f0e2e8;
        }

        tr:hover {
            background: #fff8fb;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #999;
        }

        .action {
            display: flex;
            gap: 8px;
        }

        .edit {
            background: #ead7df;
            color: #6f3d55;
            padding: 7px 12px;
            border-radius: 8px;
            text-decoration: none;
        }

        .edit:hover {
            background: #dfc4cf;
        }

        .delete {
            background: #f4d1d8;
            color: #9b3f55;
            border: none;
            padding: 7px 12px;
            border-radius: 8px;
            cursor: pointer;
            font-family: inherit;
        }

        .delete:hover {
            background: #edc0ca;
        }

        @media (max-width: 800px) {

            .container {
                padding: 20px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .button-group {
                width: 100%;
                flex-wrap: wrap;
            }

            .card {
                overflow-x: auto;
            }

            table {
                min-width: 700px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->

    <div class="header">

        <div>
            <h1>👥 Data Pelanggan</h1>

            <div class="subtitle">
                Kelola data pelanggan Nays Tailor
            </div>
        </div>


        <!-- TOMBOL -->

        <div class="button-group">

            <a
                href="{{ route('dashboard') }}"
                class="btn-back">
                ← Kembali
            </a>

            <a
                href="{{ route('pelanggan.create') }}"
                class="btn">
                + Tambah Pelanggan
            </a>

        </div>

    </div>


    <!-- DATA PELANGGAN -->

    <div class="card">

        <table>

            <thead>

                <tr>

                    <th>
                        No
                    </th>

                    <th>
                        Nama
                    </th>

                    <th>
                        No. HP
                    </th>

                    <th>
                        Alamat
                    </th>

                    <th>
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($pelanggans as $pelanggan)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>


                        <td>
                            <strong>
                                {{ $pelanggan->nama }}
                            </strong>
                        </td>


                        <td>
                            {{ $pelanggan->no_hp }}
                        </td>


                        <td>
                            {{ $pelanggan->alamat ?? '-' }}
                        </td>


                        <td>

                            <div class="action">

                                <a
                                    href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                    class="edit">
                                    Edit
                                </a>


                                <form
                                    action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="delete">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>


                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="empty">

                            Belum ada data pelanggan.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>