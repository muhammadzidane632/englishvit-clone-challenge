@extends('layouts.app')

@section('title', 'Kursus Bahasa Inggris Bergaransi | Englishvit')

@section('content')

    {{-- hero section --}}
    @include('components.hero.section')

    {{-- pilihan program --}}
    @include('components.programs.options')

    {{-- program rekomendasi --}}
    @include('components.programs.recommendations')

    {{-- testimonials --}}
    @include('components.testimonials.section')
   
@endsection