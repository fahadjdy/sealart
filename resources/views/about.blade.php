@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
  About
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
                About
            </li>
        </ol>
    </div>
</nav>


    <section id="about" class="container about-company py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Content -->
                <div class="col-lg-6">
                    <h2 class="mb-4 fw-700">Welcome to <span class="text-primary">{{ $profile->name}}</span> </h2>
                    <p class="lead mb-4">{{ $profile->about}}</p>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <i class="fa-solid fa-industry fa-lg text-primary me-2"></i> Industrial Sealing
                            Solutions
                        </div>
                        <div class="col-6 mb-3">
                            <i class="fa-solid fa-cogs fa-lg text-primary me-2"></i> Mechanical Seal
                            Manufacturing
                        </div>
                        <div class="col-6 mb-3">
                            <i class="fa-solid fa-oil-can fa-lg text-primary me-2"></i> Oil & Hydraulic Seals
                        </div>
                        <div class="col-6 mb-3">
                            <i class="fa-solid fa-wind fa-lg text-primary me-2"></i> Automotive & Heavy
                            Machinery Seals
                        </div>
                        <div class="col-6 mb-3">
                            <i class="fa-solid fa-tools fa-lg text-primary me-2"></i> Seal Repair &
                            Refurbishment
                        </div>
                        <div class="col-6 mb-3">
                            <i class="fa-solid fa-arrows-rotate fa-lg text-primary me-2"></i> Custom Seal Design
                            & Engineering
                        </div>
                    </div>

                </div>
                <!-- Image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img loading="lazy" src="{{ asset('storage/' . $profile->company_image) }}" alt="About {{ $profile->name }}"
                        class="img-fluid rounded shadow" />
                </div>
            </div>
        </div>
    </section>

    <x-services/>

    <x-contact/>

@endsection
