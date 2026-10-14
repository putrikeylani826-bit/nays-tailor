<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - NAYS TAILOR</title>


    <style>

        /* =========================================
           RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family: Arial, Helvetica, sans-serif;

            min-height: 100vh;

            background: #f8e9eb;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #5d3545;

        }



        /* =========================================
           CONTAINER UTAMA
        ========================================= */

        .login-wrapper {

            width: 92%;

            max-width: 1150px;

            min-height: 650px;

            display: flex;

            background: #fffaf8;

            border-radius: 28px;

            overflow: hidden;

            box-shadow:
                0 25px 70px rgba(105, 55, 75, 0.18);

        }



        /* =========================================
           BAGIAN KIRI
        ========================================= */

        .left-side {

            width: 55%;

            position: relative;

            min-height: 650px;

            overflow: hidden;

            background: #d9aeb9;

        }


        .left-side img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

        }


        /* LAPISAN WARNA DI ATAS FOTO */

        .image-overlay {

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    135deg,
                    rgba(116, 57, 81, 0.58),
                    rgba(215, 157, 171, 0.18)
                );

        }



        /* =========================================
           TEKS NAYS TAILOR
        ========================================= */

        .brand-content {

            position: absolute;

            left: 55px;

            bottom: 55px;

            color: white;

            z-index: 2;

            max-width: 480px;

        }


        .brand-small {

            font-size: 13px;

            letter-spacing: 5px;

            margin-bottom: 18px;

            color: #ffeef2;

        }


        .brand-content h1 {

            font-family: Georgia, serif;

            font-size: 58px;

            letter-spacing: 3px;

            margin-bottom: 8px;

            font-weight: bold;

        }


        .brand-content h2 {

            font-size: 15px;

            letter-spacing: 7px;

            font-weight: normal;

            margin-bottom: 25px;

            color: #ffe8ed;

        }


        .brand-content p {

            font-size: 15px;

            line-height: 1.8;

            color: #fff4f6;

            max-width: 410px;

        }



        /* =========================================
           BAGIAN KANAN
        ========================================= */

        .right-side {

            width: 45%;

            background: #fffaf8;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 60px;

        }


        .login-box {

            width: 100%;

            max-width: 390px;

        }



        /* =========================================
           LOGO KECIL
        ========================================= */

        .login-icon {

            width: 70px;

            height: 70px;

            border-radius: 50%;

            background: #f4dce2;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 25px;

            font-size: 30px;

        }



        /* =========================================
           JUDUL
        ========================================= */

        .login-box h2 {

            font-family: Georgia, serif;

            font-size: 38px;

            color: #65394b;

            margin-bottom: 10px;

        }


        .login-subtitle {

            color: #97717d;

            font-size: 14px;

            line-height: 1.7;

            margin-bottom: 35px;

        }



        /* =========================================
           ALERT ERROR
        ========================================= */

        .alert {

            background: #f8dfe4;

            color: #8b4057;

            border: 1px solid #e9b9c5;

            padding: 13px 16px;

            border-radius: 12px;

            margin-bottom: 20px;

            font-size: 14px;

        }



        /* =========================================
           LABEL
        ========================================= */

        .form-group {

            margin-bottom: 22px;

        }


        .form-group label {

            display: block;

            margin-bottom: 9px;

            color: #633b4b;

            font-size: 14px;

            font-weight: 600;

        }



        /* =========================================
           INPUT
        ========================================= */

        .form-control {

            width: 100%;

            padding: 15px 17px;

            border: 1px solid #e4cbd1;

            border-radius: 13px;

            background: #fffdfc;

            color: #5d3545;

            font-size: 14px;

            outline: none;

            transition: 0.3s;

        }


        .form-control::placeholder {

            color: #b797a2;

        }


        .form-control:focus {

            border-color: #b56d83;

            box-shadow:
                0 0 0 4px rgba(181, 109, 131, 0.10);

            background: white;

        }



        /* =========================================
           BUTTON LOGIN
        ========================================= */

        .login-button {

            width: 100%;

            border: none;

            padding: 16px;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    #7d4059,
                    #a85e76
                );

            color: white;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;

            box-shadow:
                0 10px 25px rgba(125, 64, 89, 0.20);

        }


        .login-button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 14px 30px rgba(125, 64, 89, 0.28);

        }



        /* =========================================
           KEMBALI KE BERANDA
        ========================================= */

        .back-home {

            text-align: center;

            margin-top: 25px;

        }


        .back-home a {

            color: #8b5267;

            text-decoration: none;

            font-size: 13px;

        }


        .back-home a:hover {

            color: #6d344c;

        }



        /* =========================================
           HIASAN
        ========================================= */

        .decor {

            position: absolute;

            width: 180px;

            height: 180px;

            border-radius: 50%;

            background: rgba(255,255,255,0.08);

            top: -70px;

            right: -70px;

        }


        .decor-two {

            position: absolute;

            width: 120px;

            height: 120px;

            border-radius: 50%;

            background: rgba(255,255,255,0.08);

            bottom: 40px;

            right: 30px;

        }



        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 900px) {

            .login-wrapper {

                width: 94%;

            }


            .left-side {

                width: 50%;

            }


            .right-side {

                width: 50%;

                padding: 40px;

            }


            .brand-content {

                left: 35px;

                bottom: 35px;

            }


            .brand-content h1 {

                font-size: 45px;

            }


            .brand-content p {

                font-size: 13px;

            }

        }



        /* =========================================
           HP
        ========================================= */

        @media (max-width: 700px) {

            body {

                padding: 20px;

            }


            .login-wrapper {

                flex-direction: column;

                width: 100%;

                min-height: auto;

                border-radius: 22px;

            }


            .left-side {

                width: 100%;

                min-height: 330px;

            }


            .right-side {

                width: 100%;

                padding: 40px 30px;

            }


            .brand-content {

                left: 30px;

                bottom: 30px;

            }


            .brand-content h1 {

                font-size: 40px;

            }


            .brand-content h2 {

                font-size: 12px;

                letter-spacing: 5px;

            }


            .brand-content p {

                display: none;

            }


            .login-box h2 {

                font-size: 32px;

            }

        }



        /* =========================================
           HP KECIL
        ========================================= */

        @media (max-width: 430px) {

            body {

                padding: 10px;

            }


            .left-side {

                min-height: 280px;

            }


            .right-side {

                padding: 35px 22px;

            }


            .brand-content {

                left: 25px;

                bottom: 25px;

            }


            .brand-content h1 {

                font-size: 34px;

            }

        }

    </style>

</head>



<body>


    <!-- =========================================
         LOGIN WRAPPER
    ========================================= -->

    <div class="login-wrapper">


        <!-- =====================================
             BAGIAN FOTO
        ====================================== -->

        <div class="left-side">


            <!-- FOTO NAYS TAILOR -->

            <img
                src="{{ asset('Image/bg1(1).png') }}"
                alt="NAYS TAILOR"
            >


            <!-- OVERLAY -->

            <div class="image-overlay"></div>


            <!-- HIASAN -->

            <div class="decor"></div>

            <div class="decor-two"></div>


            <!-- BRAND -->

            <div class="brand-content">


                <div class="brand-small">

                    ✦ JASA JAHIT ANAK ✦

                </div>


                <h1>

                    NAYS

                </h1>


                <h2>

                    TAILOR

                </h2>


                <p>

                    Jahitan cantik, nyaman dipakai.
                    Dibuat dengan teliti dan penuh
                    perhatian untuk setiap kebutuhan
                    pelanggan.

                </p>


            </div>


        </div>



        <!-- =====================================
             BAGIAN LOGIN
        ====================================== -->

        <div class="right-side">


            <div class="login-box">


                <!-- ICON -->



                <!-- JUDUL -->

                <h2>

                    Selamat Datang

                </h2>


                <p class="login-subtitle">

                    Silakan masuk untuk mengakses
                    dashboard administrator Nays Tailor.

                </p>



                <!-- ERROR -->

                @if(session('error'))

                    <div class="alert">

                        {{ session('error') }}

                    </div>

                @endif



                @if($errors->any())

                    <div class="alert">

                        Email atau password salah.

                    </div>

                @endif



                <!-- FORM -->

                <form
                    action="{{ route('login.process') }}"
                    method="POST"
                >

                    @csrf



                    <!-- EMAIL -->

                    <div class="form-group">


                        <label for="email">

                            Email

                        </label>


                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="Masukkan email"
                            value="{{ old('email') }}"
                            required
                        >


                    </div>



                    <!-- PASSWORD -->

                    <div class="form-group">


                        <label for="password">

                            Password

                        </label>


                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required
                        >


                    </div>



                    <!-- BUTTON -->

                    <button
                        type="submit"
                        class="login-button"
                    >

                        Masuk ke Dashboard

                    </button>


                </form>



                <!-- BACK -->

                <div class="back-home">

                    <a href="{{ route('home') }}">

                        ← Kembali ke Beranda

                    </a>

                </div>


            </div>


        </div>


    </div>


</body>

</html>