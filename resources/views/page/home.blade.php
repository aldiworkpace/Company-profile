@extends('layouts.app')

@section('title', 'Japan Travel')

@section('content')
    @include('partials.home.hero')
    @include('partials.home.description')
    @include('partials.home.pilihan')
    @include('partials.home.cta')
@endsection
