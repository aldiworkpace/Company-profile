<section class="py-5 min-vh-100 d-flex">
    <div class="container mt-3">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6 mb-4 mb-md-0 ps-md-4">
                <div class="text-start">
                    <p class="fw-bolder text-dark" style="font-size: 40px; letter-spacing: 5px;">TENTANG KAMI</p>
                </div>

                <div class="d-flex flex-column">
                    <div class="text-start">
                        <p class="fw-bolder text-dark" style="font-size: 25px; letter-spacing: 2px;">VISI</p>
                    </div>

                    <div class="text-start">
                        <p class="text-dark" style="font-size: 15px;">{{ $abouts->visi }}</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center px-3 px-md-0">
                        <img src="{{ asset('images/assets/' . $abouts->image_3) }}" alt="about"
                            class="img-fluid rounded" style="max-width: 350px;">
                    </div>
                    <div class="d-flex flex-column text-start mt-4">
                        <p class="fw-bolder text-dark mb-2" style="font-size: 25px; letter-spacing: 2px;">KEUNGGULAN</p>
                        <p class="text-dark" style="font-size: 15px; line-height: 1.6;">
                            {{ $abouts->desc_1 }}
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-2 px-3 px-md-0">
                        <img src="{{ asset('images/assets/' . $abouts->image_6) }}" alt="about"
                            class="img-fluid rounded" style="max-width: 400px;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="d-flex align-items-center justify-content-center flex-wrap gap-3">
                    <img src="{{ asset('images/assets/' . $abouts->image_1) }}" alt="about"
                        class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                    <img src="{{ asset('images/assets/' . $abouts->image_2) }}" alt="about"
                        class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                </div>
                <div class="d-flex flex-column text-start mt-4">
                    <p class="fw-bolder text-dark mb-2" style="font-size: 25px; letter-spacing: 2px;">MISI</p>
                    <p class="text-dark" style="font-size: 15px; line-height: 1.6;">
                        {{ $abouts->misi }}
                    </p>
                </div>
                <div class="position-relative mx-auto" style="max-width: 450px;">
                    <img src="{{ asset('images/assets/' . $abouts->image_4) }}" alt="about"
                        class="img-fluid rounded w-75 mb-4" style="max-width: 350px;">
                    <img src="{{ asset('images/assets/' . $abouts->image_5) }}"
                        class="img-fluid rounded shadow-lg position-absolute bottom-0 end-0 w-50" alt="Japan 2">
                </div>
                <div class="d-flex flex-column text-start mt-4">
                    <p class="fw-bolder text-dark mb-2" style="font-size: 25px; letter-spacing: 2px;">KERJASAMA</p>
                    <p class="text-dark" style="font-size: 15px; line-height: 1.6;">
                        {{ $abouts->desc_2 }}
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>
