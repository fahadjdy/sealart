@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
  Contact
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
                    Contact
                </li>
            </ol>
        </div>
    </nav>

    <x-contact/>

    
@endsection