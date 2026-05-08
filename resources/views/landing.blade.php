@extends('layouts.app')

@section('title', 'Kursus Bahasa Inggris Bergaransi | Englishvit')

@section('content')

    {{-- hero section --}}
    @include('components.hero')

    {{-- pilihan program --}}
    @include('components.program-options')

    {{-- program rekomendasi --}}
    @include('components.program-recommendations')

    {{-- testimonials --}}
    @include('components.testimonials')

    {{-- partners --}}
    @include('components.partners')

    {{-- special promo --}}
    @include('components.promo')
   
@endsection