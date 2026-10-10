<section class="py-5 min-vh-100 mx-0 mx-md-5 mt-3" style="background-color:#1b1b1b; border-radius: 0px 60px 0px 20px;">
    <div class="position-relative w-100" style="height: 0; z-index: 0;">
        <img src="{{ asset('images/assets/decor.png') }}" class="position-absolute"
            style="top: -150px; left: 1%; max-width: 400px;">
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center mb-4 gap-5">
            <h1 class="fw-lighter text-danger">Paket Wisata Kami</h1>
        </div>
        <div class="row">
            @foreach ($paket_travels as $paket)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                    <div class="card h-100 shadow-sm overflow-hidden p-2" style="background-color: #f4f1ea;">
                        <div class="position-relative">
                            <img src="{{ asset('images/' . $paket->image) }}" class="card-img-top w-100"
                                alt="Anime & Pop Culture Tour" style="height: 120px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 bg-white px-2 py-1 m-2 rounded-pill shadow-sm fw-bold"
                                style="font-size: 0.7rem;">
                                <i class="bi bi-star-fill text-warning"></i> {{ $paket->rating }}
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column p-3">
                            <div class="d-flex gap-1 mb-2" style="font-size: 1rem;">
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-2 py-1">
                                    <i class="bi bi-geo-alt-fill"></i> {{ $paket->destinasi }}
                                </span>
                                <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-2 py-1">
                                    <i class="bi bi-clock"></i> {{ $paket->durasi_hari }} Hari
                                </span>
                            </div>

                            <h6 class="card-title fw-bold mb-1">{{ $paket->nama_paket }}</h6>

                            <p class="card-text text-muted mb-2" style="font-size: 0.8rem; line-height: 1.4;">
                                {{ Str::limit($paket->deskripsi, 100) }}
                            </p>

                            <div class="mb-3">
                                <p class="fw-semibold mb-1" style="font-size: 0.75rem;">Termasuk:</p>
                                <p class="text-muted mb-0 text-truncate-2"
                                    style="font-size: 0.75rem; line-height: 1.4;">
                                    {{ Str::limit($paket->fasilitas, 100) }}
                                </p>
                            </div>

                            <div class="mt-auto border-top pt-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="d-block text-muted mb-0" style="font-size: 0.7rem;">Mulai dari</span>
                                    <span class="fw-bold text-danger" style="font-size: 0.95rem;">Rp
                                        {{ number_format($paket->harga, 0, ',', '.') }}</span>
                                </div>
                                <a href="#" class="btn btn-dark btn-sm rounded-pill px-3"
                                    style="font-size: 0.75rem;">Detail</a>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
