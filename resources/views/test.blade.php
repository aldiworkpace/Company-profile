<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Travel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="position-absolute top-3 start-0 end-0 z-4 mt-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
                <div class="container-fluid">
                    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse align-items-center" id="navbarContent">
                        <ul class="navbar-nav w-100 justify-content-evenly">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Paket Travel</a></li>
                        </ul>

                        <a class="navbar-brand d-none d-lg-block mx-lg-4 fs-5 fw-semibold " href="#">Japan
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
    <section class="d-flex flex-column min-vh-100 mt-3 mx-4"
        style="background-image: url('../images/fuji.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; border-radius: 15px 15px 15px 80px;">

    </section>

</body>

</html>
