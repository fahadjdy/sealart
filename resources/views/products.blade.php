@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
  Products
@endsection

@section('content')

<!-- Breadcrumb Section -->
<nav aria-label="breadcrumb" class="bg-light py-3 mb-4">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Products
            </li>
        </ol>
    </div>
</nav>

<div class="container py-5">
    <div class="row g-4">
        @foreach($products as $product)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             class="card-img-top" 
                             alt="{{ $product->name }}">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none text-dark">
                                {{ $product->name }}
                            </a>
                        </h5>
                        <p class="text-primary">
                            {{ $product->category->name }}
                        </p>
                        <p class="card-text flex-grow-1 text-gray">
                            {{ Str::limit(strip_tags($product->description), 120) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="tel:+917203070468" class="btn btn-primary">
                                <i class="fa-solid fa-phone me-2"></i> Call Now
                            </a>
                            <a href="https://wa.me/917203070468?text=Hello%20Seal%20Art!%20I%20am%20interested%20in%20{{ urlencode($product->name) }}"
                               target="_blank" class="btn btn-success">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-5 d-flex justify-content-center">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>

    <x-services/>

    <x-contact/>

@endsection

