<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NAYS TAILOR - Jasa Jahit Anak</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #fffaf7;
            color: #493936;
        }


        /* =========================
           NAVBAR
        ========================= */

        nav {
            height: 75px;
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 7%;

            background: #fffaf7;

            border-bottom: 1px solid #eadbd7;

            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo h1 {
            color: #713f55;
            font-size: 25px;
            letter-spacing: 3px;
        }

        .logo span {
            display: block;

            color: #a77c82;

            font-size: 11px;

            letter-spacing: 4px;

            margin-top: 2px;
        }

        .nav-menu {
            display: flex;

            align-items: center;

            gap: 30px;
        }

        .nav-menu a {
            color: #654d49;

            text-decoration: none;

            font-size: 14px;

            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #a45f73;
        }

        .login-btn {
            background: #713f55;

            color: white !important;

            padding: 11px 21px;

            border-radius: 25px;
        }

        .login-btn:hover {
            background: #572f41;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 650px;

            display: flex;

            align-items: center;

            padding: 55px 7%;

            background: #fff7f2;
        }

        .hero-content {
            width: 52%;

            padding-right: 30px;
        }

        .small-title {
            color: #a05e73;

            font-size: 13px;

            letter-spacing: 3px;

            margin-bottom: 20px;
        }

        .hero h2 {
            font-family: Georgia, serif;

            color: #573641;

            font-size: 55px;

            line-height: 1.12;

            margin-bottom: 22px;
        }

        .hero h2 span {
            color: #a45f73;
        }

        .hero p {
            color: #806c67;

            font-size: 16px;

            line-height: 1.8;

            max-width: 560px;

            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;

            gap: 14px;
        }

        .btn-primary {
            display: inline-block;

            padding: 14px 25px;

            background: #713f55;

            color: white;

            text-decoration: none;

            border-radius: 30px;

            font-size: 14px;

            transition: 0.3s;
        }

        .btn-primary:hover {
            background: #572f41;

            transform: translateY(-2px);
        }

        .btn-secondary {
            display: inline-block;

            padding: 14px 25px;

            border: 1px solid #a77782;

            color: #713f55;

            text-decoration: none;

            border-radius: 30px;

            font-size: 14px;

            transition: 0.3s;
        }

        .btn-secondary:hover {
            background: #f5e1e4;
        }


        /* =========================
           HERO IMAGE
        ========================= */

        .hero-image {
            width: 48%;

            display: flex;

            justify-content: center;

            align-items: center;
        }

        .image-card {
            width: 500px;

            height: 540px;

            border-radius:
                250px
                250px
                35px
                35px;

            overflow: hidden;

            background: #ead0d5;

            box-shadow:
                0 25px 50px
                rgba(91, 52, 63, 0.20);
        }

        .image-card img {
            width: 100%;

            height: 100%;

            display: block;

            object-fit: cover;

            object-position: center;
        }


        /* =========================
           SECTION
        ========================= */

        .section {
            padding: 85px 8%;
        }

        .section-title {
            text-align: center;

            margin-bottom: 45px;
        }

        .section-title small {
            color: #a05e73;

            letter-spacing: 2px;

            font-size: 12px;
        }

        .section-title h2 {
            font-family: Georgia, serif;

            color: #573641;

            font-size: 38px;

            margin-top: 8px;
        }

        .section-title p {
            color: #8b7772;

            margin-top: 10px;

            font-size: 14px;
        }


        /* =========================
           LAYANAN
        ========================= */

        .services {
            max-width: 1000px;

            margin: auto;

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 30px;
        }

        .service-card {
            background: white;

            border-radius: 20px;

            padding: 18px;

            border: 1px solid #eee0dc;

            box-shadow:
                0 10px 30px
                rgba(80, 50, 50, 0.06);

            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 18px 35px
                rgba(80, 50, 50, 0.10);
        }

        .service-image {
            width: 100%;

            height: 300px;

            object-fit: cover;

            border-radius: 15px;

            display: block;

            margin-bottom: 20px;
        }

        .service-icon {
            width: 50px;

            height: 50px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 15px;

            background: #f5e0e4;

            font-size: 23px;

            margin-bottom: 15px;
        }

        .service-card h3 {
            color: #633d49;

            margin-bottom: 10px;

            font-size: 19px;
        }

        .service-card p {
            color: #88736e;

            font-size: 14px;

            line-height: 1.7;
        }


        /* =========================
           TENTANG KAMI
        ========================= */

        .about {
            background: #f7e8e5;

            display: flex;

            align-items: center;

            gap: 70px;
        }

        .about-box {
            width: 50%;
        }

        .about-box h2 {
            font-family: Georgia, serif;

            color: #573641;

            font-size: 38px;

            margin-top: 10px;

            margin-bottom: 20px;
        }

        .about-box p {
            color: #76615c;

            line-height: 1.8;

            font-size: 15px;

            margin-bottom: 15px;
        }

        .about-photo {
            width: 50%;

            height: 400px;

            border-radius: 30px;

            overflow: hidden;

            box-shadow:
                0 15px 35px
                rgba(80, 50, 50, 0.12);
        }

        .about-photo img {
            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;
        }


        /* =========================
           CARA PESAN
        ========================= */

        .process {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }

        .process-card {
            text-align: center;

            padding: 25px 15px;
        }

        .number {
            width: 55px;

            height: 55px;

            border-radius: 50%;

            margin: auto;

            margin-bottom: 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #713f55;

            color: white;

            font-weight: bold;
        }

        .process-card h3 {
            color: #633d49;

            font-size: 17px;

            margin-bottom: 8px;
        }

        .process-card p {
            color: #8b7772;

            font-size: 13px;

            line-height: 1.6;
        }


        /* =========================
           CTA
        ========================= */

        .cta {
            margin: 30px 8% 80px;

            padding: 80px 40px;

            border-radius: 25px;

            text-align: center;

            background:
                linear-gradient(
                    rgba(113, 63, 85, 0.84),
                    rgba(164, 95, 115, 0.84)
                ),
                url("/Image/bg2.png");

            background-size: cover;

            background-position: center;

            color: white;
        }

        .cta h2 {
            font-family: Georgia, serif;

            font-size: 35px;

            margin-bottom: 12px;
        }

        .cta p {
            font-size: 14px;

            margin-bottom: 25px;
        }

        .cta a {
            display: inline-block;

            background: white;

            color: #713f55;

            text-decoration: none;

            padding: 13px 25px;

            border-radius: 25px;

            font-weight: bold;

            font-size: 14px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #4e303b;

            color: white;

            text-align: center;

            padding: 30px;

            font-size: 13px;
        }

        footer span {
            color: #e5bfc8;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .hero {
                padding-left: 5%;
                padding-right: 5%;
            }

            .image-card {
                width: 450px;
                height: 500px;
            }

            .hero h2 {
                font-size: 48px;
            }
        }


        @media (max-width: 850px) {

            nav {
                height: auto;

                padding: 18px 5%;

                flex-direction: column;

                gap: 15px;
            }

            .nav-menu {
                gap: 15px;

                flex-wrap: wrap;

                justify-content: center;
            }

            .hero {
                flex-direction: column;

                text-align: center;

                padding-top: 60px;

                padding-bottom: 60px;
            }

            .hero-content {
                width: 100%;

                padding-right: 0;
            }

            .hero h2 {
                font-size: 43px;
            }

            .hero-image {
                width: 100%;

                margin-top: 45px;
            }

            .image-card {
                width: 400px;

                height: 450px;
            }

            .hero-buttons {
                justify-content: center;
            }

            .services {
                grid-template-columns: 1fr;
            }

            .about {
                flex-direction: column;

                gap: 40px;
            }

            .about-box,
            .about-photo {
                width: 100%;
            }

            .process {
                grid-template-columns:
                    repeat(2, 1fr);
            }
        }


        @media (max-width: 500px) {

            .nav-menu {
                gap: 10px;
            }

            .nav-menu a {
                font-size: 12px;
            }

            .hero h2 {
                font-size: 36px;
            }

            .hero p {
                font-size: 14px;
            }

            .image-card {
                width: 320px;

                height: 380px;

                border-radius:
                    160px
                    160px
                    25px
                    25px;
            }

            .process {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 32px;
            }
        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav>

    <div class="logo">

        <h1>NAYS</h1>

        <span>TAILOR</span>

    </div>


    <div class="nav-menu">

        <a href="#beranda">
            Beranda
        </a>

        <a href="#layanan">
            Layanan
        </a>

        <a href="#tentang">
            Tentang Kami
        </a>

        <a href="#proses">
            Cara Pesan
        </a>

        <a
            href="{{ route('login') }}"
            class="login-btn"
        >
            Login Admin
        </a>

    </div>

</nav>



<!-- =========================
     HERO
========================= -->

<section
    class="hero"
    id="beranda"
>

    <div class="hero-content">

        <div class="small-title">
            ✦ NAYS TAILOR ✦
        </div>


        <h2>

            Jahitan Cantik,

            <span>
                Nyaman
            </span>

            Dipakai.

        </h2>


        <p>

            Jasa jahit celana dan dress anak
            dengan ukuran yang dapat disesuaikan
            sesuai kebutuhan. Dibuat dengan teliti,
            rapi, dan penuh perhatian.

        </p>


        <div class="hero-buttons">

            <a
                href="#layanan"
                class="btn-primary"
            >
                Lihat Layanan
            </a>


            <a
                href="#tentang"
                class="btn-secondary"
            >
                Tentang Kami
            </a>

        </div>

    </div>



    <div class="hero-image">

        <div class="image-card">

            <img
                src="/Image/bg1(1).png"
                alt="Nays Tailor"
            >

        </div>

    </div>

</section>



<!-- =========================
     LAYANAN
========================= -->

<section
    class="section"
    id="layanan"
>

    <div class="section-title">

        <small>
            LAYANAN KAMI
        </small>

        <h2>
            Pilihan Jahitan
        </h2>

        <p>
            Pilihan layanan jahit Nays Tailor
            sesuai kebutuhan pelanggan.
        </p>

    </div>



    <div class="services">


        <div class="service-card">

            <img
                src="/Image/ftdress.jpg"
                alt="Dress Anak"
                class="service-image"
            >
            <h3>
                Dress Anak
            </h3>

            <p>

                Pembuatan dress anak dengan
                ukuran dan model yang dapat
                disesuaikan dengan keinginan.

            </p>

        </div>



        <div class="service-card">

            <img
                src="/Image/ftcelanakarakter.jpg"
                alt="Celana Anak"
                class="service-image"
            >

            <h3>
                Celana Anak
            </h3>

            <p>

                Jahit celana anak dengan ukuran
                yang nyaman dan model yang
                sesuai kebutuhan.

            </p>

        </div>


    </div>

</section>



<!-- =========================
     TENTANG KAMI
========================= -->

<section
    class="section about"
    id="tentang"
>

    <div class="about-box">

        <small
            style="
                color:#a05e73;
                letter-spacing:2px;
            "
        >
            TENTANG NAYS TAILOR
        </small>


        <h2>
            Dibuat dengan
            ketelitian.
        </h2>


        <p>

            Nays Tailor merupakan usaha jasa jahit
            yang melayani pembuatan pakaian anak
            sesuai ukuran dan kebutuhan pelanggan.

        </p>


        <p>

            Setiap pesanan dikerjakan dengan
            memperhatikan ukuran, model, kenyamanan,
            dan kerapian hasil jahitan.

        </p>


        <a
            href="#proses"
            class="btn-primary"
        >
            Lihat Cara Pesan
        </a>

    </div>



    <div class="about-photo">

        <img
            src="/Image/bg2.png"
            alt="Nays Tailor"
        >

    </div>

</section>



<!-- =========================
     CARA PESAN
========================= -->

<section
    class="section"
    id="proses"
>

    <div class="section-title">

        <small>
            CARA PESAN
        </small>

        <h2>
            Mudah & Praktis
        </h2>

        <p>
            Proses pemesanan di Nays Tailor.
        </p>

    </div>



    <div class="process">


        <div class="process-card">

            <div class="number">
                01
            </div>

            <h3>
                Konsultasi
            </h3>

            <p>
                Tentukan model dan jenis
                pakaian yang diinginkan.
            </p>

        </div>



        <div class="process-card">

            <div class="number">
                02
            </div>

            <h3>
                Pengukuran
            </h3>

            <p>
                Ukuran pelanggan dicatat
                dengan teliti.
            </p>

        </div>



        <div class="process-card">

            <div class="number">
                03
            </div>

            <h3>
                Proses Jahit
            </h3>

            <p>
                Pesanan dikerjakan sesuai
                model dan ukuran.
            </p>

        </div>



        <div class="process-card">

            <div class="number">
                04
            </div>

            <h3>
                Selesai
            </h3>

            <p>
                Pesanan diperiksa dan siap
                diberikan kepada pelanggan.
            </p>

        </div>


    </div>

</section>



<!-- =========================
     CTA
========================= -->

<section class="cta">

    <h2>
        Siap Membuat
        Jahitan Impian?
    </h2>

    <p>
        Konsultasikan kebutuhan jahit
        Anda bersama Nays Tailor.
    </p>

    <a href="#layanan">
        Lihat Layanan
    </a>

</section>



<!-- =========================
     FOOTER
========================= -->

<footer>

    © 2026

    <span>
        Nays Tailor
    </span>

    .

    Sistem Informasi Jasa Jahit Celana & Dress Anak.

</footer>


</body>

</html>