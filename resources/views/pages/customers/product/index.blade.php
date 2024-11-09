@extends('layouts.app')

@section('title', 'Produk | E-Commerce')

@section('content')
  @include('components.produk.hero')

  @include('components.produk.collection', ['products' => $products])
@endsection
