<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/decor.png') }}" class="position-absolute"
        style="top: -130px; left: 67%; max-width: 400px;">
</div>

<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/Lamp.gif') }}" class="position-absolute"
        style="top: -10px; left: 4S%; max-width: 200px;">
</div>

<section class="py-5 min-vh-100"id="start">
    <div class="container">

        <div class="d-flex align-items-center justify-content-center mb-4 gap-5">
            <h1 class="fw-lighter">Mulai Perjalanan Bersama Kami</h1>
        </div>

        <div class="row align-items-center">

            <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                <h5 class="fw-bolder">Berkenalan dengan kami</h5>
                <p class="mt-4">{{ $homes->deskripsi_1 }}</p>

                <p class="mt-4">{{ $homes->deskripsi_2 }}</p>
            </div>

            <div class="col-md-6 p-4">
                <div class="position-relative mx-auto" style="max-width: 450px;">
                    <img src="{{ asset('images/assets/' . $homes->image_1) }}" class="img-fluid rounded w-75 mb-4"
                        alt="Japan 1">
                    <img src="{{ asset('images/assets/' . $homes->image_2) }}"
                        class="img-fluid rounded shadow-lg position-absolute bottom-0 end-0 w-50" alt="Japan 2">
                </div>

            </div>

        </div>
    </div>
</section>
