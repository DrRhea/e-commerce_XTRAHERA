@extends('layouts.app')

@section('title', 'Beranda | E-Commerce')

@section('content')
    {{-- Hero --}}
    <main>
        @include('components.beranda.hero')
    </main>


    {{-- Sections 2 - Category Showcase --}}
    <section>
        @include('components.beranda.collection')
    </section>

    {{-- Sections 4 - Subscription Pricing --}}
    <section>
        @include('components.beranda.subscription')
    </section>
@endsection
