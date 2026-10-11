@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="position-relative w-100" style="height: 0; z-index: -1;">
        <img src="{{ asset('images/assets/Lamp.gif') }}" class="position-absolute"
            style="top: 480px; left: 30%; max-width: 200px;">
    </div>
    <div class="position-relative w-100" style="height: 0; z-index: -1;">
        <img src="{{ asset('images/assets/decor2.png') }}" class="position-absolute"
            style="top: 450px; left: 60%; max-width: 600px;">
    </div>
    <div class="container mt-4">
        <p class="fw-bolder text-dark" style="font-size: 60px; letter-spacing: 8px;">ABOUT US</p>
    </div>
    <section class="d-flex align-items-center mx-0 mx-md-5 mt-3"
        style="min-height: 60vh;background-image: url('{{ asset('images/assets/' . $abouts->hero_image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat; border: 5px solid black;">

        <div class="container mt-4">
            <div class="row align-items-center">

                <div class="col-md-5 ps-4 ps-md-5 ms-md-5 text-center">

                </div>


                <div class="col-md-6 text-center">

                </div>
            </div>
        </div>
    </section>

    @include('partials.about.desc')
@endsection
