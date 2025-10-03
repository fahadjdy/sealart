@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
  Product Detail
@endsection

@section('content')

<!-- Breadcrumb Section -->
<nav aria-label="breadcrumb" class="bg-light py-3 mb-4">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('products.index') }}">Products</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $product->name }}
            </li>
        </ol>
    </div>
</nav>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image) }}" 
                 class="img-fluid rounded shadow" 
                 alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>

            <div class="mt-3">
                <a href="tel:+917203070468" class="btn btn-primary">
                    <i class="fa-solid fa-phone me-2"></i> Call Now
                </a>
                <a href="https://wa.me/917203070468?text=Hello%20Seal%20Art!%20I%20am%20interested%20in%20{{ urlencode($product->name) }}"
                   target="_blank" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
