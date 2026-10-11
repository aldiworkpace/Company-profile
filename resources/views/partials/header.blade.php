<div class="container">
    <nav class="navbar d-lg-block navbar-expand-lg navbar-custom shadow-sm" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse align-items-center" id="navbarContent">
                <ul class="navbar-nav w-100 justify-content-evenly">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('travel') ? 'active' : '' }}"
                            href="{{ url('/travel') }}">Paket Travel</a>
                    </li>
                </ul>

                <a class="navbar-brand d-none d-lg-block mx-lg-4 fs-5 text-danger fw-semibold" href="#">Japan
                    Travel</a>

                <ul class="navbar-nav w-100 justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
