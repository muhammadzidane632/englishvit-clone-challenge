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

    {{-- why englishvit / benefits --}}
    @include('components.benefits')

    {{-- lottie banner --}}
    @include('components.lottie-banner')

    {{-- FAQ section --}}
    @include('components.faq')

    {{-- media coverage marquee --}}
    @include('components.media-coverage')

    {{-- cta admin --}}
    @include('components.cta-admin')

    {{-- blog section --}}
    @include('components.blogs')

    {{-- footer --}}
    @include('components.footer')
   
@endsection