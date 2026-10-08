<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Travel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background-color: #f4f1ea;">
    <header class="sticky-top mt-4">
        <div class="container">
            <nav class="navbar d-lg-block navbar-expand-lg navbar-custom shadow-sm">
                <div class="container-fluid">
                    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent">
                        <span class="navbar-toggler-icon text-light"></span>
                    </button>

                    <div class="collapse navbar-collapse align-items-center" id="navbarContent">
                        <ul class="navbar-nav w-100 justify-content-evenly">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Paket Travel</a></li>
                        </ul>

                        <a class="navbar-brand d-none d-lg-block mx-lg-4 fs-5 text-danger fw-semibold"
                            href="#">Japan
                            Travel</a>

                        <ul class="navbar-nav w-100 justify-content-evenly">
                            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero d-flex align-items-center mx-5 mt-3">
        <div class="container mt-4">
            <div class="row align-items-center">

                <div class="col-md-3 text-center text-md-start">
                    <p class="fw-bold text-white fs-4 mb-0">Welcome To</p>
                    <p class="fw-bolder text-danger" style="font-size: 80px; letter-spacing: 8px; color:red;">JAPAN</p>
                    <a href="#start" class="btn bg-white px-4 py-2" style="border-radius: 20px 20px;">Mulai Sekarang
                        &raquo;</a>
                </div>


                <div class="col-md-6 text-center">

                </div>

            </div>
        </div>
    </section>

    <section class="py-5 min-vh-100"id="start">
        <div class="container">

            <div class="d-flex align-items-center justify-content-center mb-4">
                <hr class="bg-black">
                <h1 class="fw-lighter">Mulai Perjalanan Bersama Kami</h1>
                <hr class="">
            </div>

            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <h5 class="fw-bolder">Berkenalan dengan kami</h5>
                    <p class="mt-4"> Wujudkan liburan impian Anda ke Jepang 2026-2027: Halal & Traveling Jepang
                        bersama
                        Japan Travel! Kami menghadirkan koleksi eksklusif Paket Tour Jepang 2026-2027: Trip | Japan
                        Travel
                        2026-2027 dengan itinerary yang dirancang khusus untuk memastikan pengalaman
                        wisata yang maksimal. Nikmati perjalanan tak terlupakan mengunjungi ikon budaya, landmark
                        populer, hingga destinasi alam menakjubkan di setiap musim favorit Anda dengan fasilitas
                        pelayanan bintang lima, memberikan kenangan baru dalam hidup anda.</p>

                    <p class="mt-4"> Tersedia beragam opsi perjalanan yang dipandu oleh Tour Leader bersertifikat dan
                        berpengalaman.
                        Silakan temukan ketersediaan seat
                        terkini, jadwal keberangkatan pasti,serta pilihan maskapai penerbangan premium dengan penawaran
                        harga terbaik pada katalog paket travel.</p>
                </div>

                <div class="col-md-6 p-4">
                    <div class="position-relative mx-auto" style="max-width: 450px;">
                        <img src="{{ asset('images/assets/home1.jpg') }}" class="img-fluid rounded w-75 mb-4"
                            alt="Japan 1">
                        <img src="{{ asset('images/assets/home2.jpg') }}"
                            class="img-fluid rounded shadow-lg position-absolute bottom-0 end-0 w-50" alt="Japan 2">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="py-5 min-vh-100 mx-5" style="background-color:#1b1b1b; border-radius: 30px 30px 30px 30px;">
        <div class="container">

        </div>
    </section>

    <footer class="bg-white border-top py-3 mt-5">
        <div class="container text-center">
            <span class="text-muted">&copy; 2026 Japan Travel all rights reserved</span>
        </div>
    </footer>
</body>

</html>
