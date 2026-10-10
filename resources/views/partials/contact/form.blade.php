<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/decor2.png') }}" class="position-absolute"
        style="top: -40px; left: 30%; max-width: 500px; opacity: 60%;">
</div>

<div class="position-relative w-100" style="height: 0; z-index: -1;">
    <img src="{{ asset('images/assets/decor.png') }}" class="position-absolute"
        style="top: -400px; left: -8%; max-width: 500px; opacity: 80%;">
</div>

<section class="py-5">
    <div class="container mt-4">


        <div class="row align-items-center justify-content-between">

            <div class="col-lg-5 col-md-6 mb-4 mb-md-0 ps-md-4">
                <div class="text-start mb-5">
                    <h2 class="fw-lighther" style="font-size: 40px;">Hubungi Kami Kita Selalu Ada</h2>

                    <h2 class="fw-lighther text-danger"> Untuk Anda Menjawab setiap pertanyaan anda</h2>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-envelope-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Email</h6>
                        <a href="mailto:info@travelkita.com"
                            class="text-muted text-decoration-none">{{ $contacts->email }}</a>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-instagram fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Instagram</h6>
                        <a href="#" class="text-muted text-decoration-none">{{ $contacts->instagram }}</a>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-tiktok fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">TikTok</h6>
                        <a href="#" class="text-muted text-decoration-none">{{ $contacts->tiktok }}</a>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm"
                        style="width: 50px; height: 50px;">
                        <i class="bi bi-telephone-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Telephone / WhatsApp</h6>
                        <a href="https://wa.me/6281234567890"
                            class="text-muted text-decoration-none">{{ $contacts->telephone }}</a>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3 shadow-sm"
                        style="width: 50px; height: 50px; flex-shrink: 0;">
                        <i class="bi bi-geo-alt-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Alamat</h6>
                        <p class="text-muted mb-0" style="font-size: 0.9rem;">
                            {{ $contacts->alamat }}
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <form action="#" method="POST" class="p-4 border shadow-sm" style="background-color: #1b1b1b;">
                    @csrf

                    <h3 class="fw-bold mb-4 text-center text-white">Ayo Kirim Pesan Anda</h3>

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold fs-7 text-white">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control px-3 py-2 rounded-3"
                            required>
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold fs-7 text-white">Alamat Email</label>
                        <input type="email" id="email" name="email" class="form-control px-3 py-2 rounded-3"
                            required>
                    </div>


                    <div class="mb-4">
                        <label for="pesan" class="form-label fw-semibold fs-7 text-white">Pesan</label>
                        <textarea id="pesan" name="pesan" class="form-control px-3 py-2 rounded-3" rows="5" required></textarea>
                    </div>


                    <button type="submit" class="btn btn-dark w-100 py-3 fw-bold mb-2 shadow-sm rounded-pill">
                        <i class="bi bi-send-fill me-2"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
