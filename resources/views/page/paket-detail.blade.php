@extends('layouts.app')

@section('title', 'Detail Paket Kami -' . $paket_travels->nama_paket)

@section('content')
    <div class="position-relative w-100" style="height: 0; z-index: -1;">
        <img src="{{ asset('images/assets/decor2.png') }}" class="position-absolute"
            style="top: 200px; left: 72%; max-width: 400px;">
    </div>
    <section class="py-5 min-vh-100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="position-relative mb-4 overflow-hidden shadow-sm" style="height: 450px;">
                        <img src="{{ asset('images/' . $paket_travels->image) }}" class="w-100 h-100"
                            alt="{{ $paket_travels->nama_paket }}" style="object-fit: cover;">

                        <div class="position-absolute top-0 end-0 bg-white px-3 py-2 m-3 rounded-pill shadow fw-bold">
                            <i class="bi bi-star-fill text-warning"></i> {{ $paket_travels->rating }} / 5.0
                        </div>
                    </div>

                    <h1 class="fw-bold mb-3">{{ $paket_travels->nama_paket }}</h1>

                    <div class="d-flex flex-wrap gap-2 mb-4 fs-6">
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-2">
                            <i class="bi bi-geo-alt-fill"></i> {{ $paket_travels->destinasi }}
                        </span>
                        <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2">
                            <i class="bi bi-clock"></i> {{ $paket_travels->durasi_hari }} Hari
                        </span>
                    </div>

                    <h4 class="fw-bold mb-3">Deskripsi Paket</h4>
                    <p class="text-muted mb-4" style="line-height: 1.8; text-align: justify;">
                        {{ $paket_travels->deskripsi }}
                    </p>

                    <hr class="my-4 text-muted">

                    <h4 class="fw-bold mb-3">Termasuk (Fasilitas)</h4>
                    <div class="mb-4">
                        <p class="text-dark mb-0" style="line-height: 1.8;">
                            {{ $paket_travels->fasilitas }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 rounded-4" style="top: 100px; background-color: #f4f1ea;">
                        <div class="card-body p-4">
                            <p class="text-muted mb-1 fs-6">Harga Paket Mulai Dari</p>
                            <h2 class="fw-bold text-danger mb-4">
                                Rp {{ number_format($paket_travels->harga, 0, ',', '.') }}
                                <span class="fs-6 fw-normal text-muted">/ pax</span>
                            </h2>

                            <a href="https://wa.me/6285776937806" target="_blank"
                                class="btn btn-outline-dark w-100 py-2 rounded-pill fw-semibold">
                                <i class="bi bi-whatsapp"></i> Tanya Admin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
