<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/decor2.png') }}" class="position-absolute"
        style="top: -90px; left: 68%; max-width: 450px;">
</div>

<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/Lamp.gif') }}" class="position-absolute"
        style="top: 50px; left: 70%; max-width: 200px;">
</div>

<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/decor3.png') }}" class="position-absolute"
        style="top: 50px; left: 1%; max-width: 300px;">
</div>
<section class="py-5 min-vh-100 d-flex mt-5"id="start">
    <div class="container mt-4 gap-5">
        <div class="d-flex align-items-center justify-content-center mt-5 mb-5">
            <h1 class="fw-lighter">Keunggulan Fasilitas Kami</h1>
        </div>
        <div class="row align-items-center gy-4">

            <div class="col-md-6">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/assets/' . $homes->image_3) }}" alt="Cta"
                                class="img-fluid w-100 cta-img" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/assets/' . $homes->image_4) }}" alt="Cta"
                                class="img-fluid w-100 cta-img" style="object-fit: cover;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/assets/' . $homes->image_5) }}" alt="Cta"
                                class="img-fluid w-100 cta-img" style="object-fit: cover;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container d-flex flex-column gap-3">

                    <div class="rounded-5 p-4 text-start" style="background-color:#1b1b1b ;">
                        <h4 class="text-white">{{ $homes->cta_judul_1 }}</h4>
                        <i class="text-white bi bi-luggage-fill fs-4"></i>
                        <p class="text-white">{{ $homes->cta_desc1 }}</p>
                    </div>

                    <div class="rounded-5 ms-4 p-4 text-start" style="background-color:#6b0202 ;">
                        <h4 class="text-white">{{ $homes->cta_judul_2 }}</h4>
                        <i class="bi-airplane-fill text-white fs-4"></i>
                        <p class="text-white">{{ $homes->cta_desc2 }}</p>
                    </div>

                    <div class="rounded-5 p-4 text-start" style="background-color:#1b1b1b ;">
                        <h4 class="text-white">{{ $homes->cta_judul_3 }}</h4>
                        <p class="text-white">{{ $homes->cta_desc3 }}</p>
                    </div>

                    <div class="rounded-5 p-2 text-center" style="background-color:#1b1b1b ;">
                        <a href="https://wa.me/6285776937806" class="text-white fs-4" style="text-decoration: none;">
                            Tanya Via Whatsapp</a><i class="bi bi-whatsapp mx-2 text-white fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
