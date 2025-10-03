@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
    Home
@endsection



@section('content')
        <div id="mainCarousel" class="carousel slide modern-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/' . $slider->image) }}" class="w-100" alt="{{ $slider->title }}">
                            </div>
                            <div class="col-md-6">
                                <div class="carousel-caption-box">
                                    <h5>{{ $slider->title }}</h5>
                                    <p>{!! nl2br(e($slider->description)) !!}</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left fs-4"></i>
            </button>
            <button class="carousel-control-next" data-bs-target="#mainCarousel" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right fs-4"></i>
            </button>
        </div>


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
       


        <section id="products" class="product-portfolio-section py-5">
            <div class="container">
                <!-- Section Header -->
                <div class="text-center mb-5">
                    <h2 class="fw-700">Our <span class="text-primary">Products</span></h2>
                    <p class="text-muted">
                        A comprehensive range of mechanical seals and engineered sealing solutions
                        to meet diverse industrial applications.
                    </p>
                </div>

                <!-- Products Grid -->
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
                                        <a href="{{ route('products.show', $product->slug) }}" 
                                        class="text-decoration-none text-dark">
                                            {{ $product->name }}
                                        </a>
                                    </h5>
                                    <p class="card-text flex-grow-1">
                                        {{ Str::limit($product->description, 120) }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <a href="tel:+917203070468" class="btn btn-primary">
                                            <i class="fa-solid fa-phone me-2"></i> Call Now
                                        </a>
                                        <a href="https://wa.me/917203070468?text=Hello%20Seal%20Art%20!%20I%20am%20interested%20in%20{{ urlencode($product->name) }}"
                                        target="_blank"
                                        class="btn btn-success"
                                        title="Contact on WhatsApp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- View More Button -->
                <div class="text-center mt-5">
                    <a href="{{ route('products.index') }}" class="cta-btn bg-slide-effect">
                        <span>View More</span>
                    </a>
                </div>
            </div>
        </section>



        <section class="stats-section text-white py-5" style="background:
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('assets/img/profile/about-us.jpg') center/cover no-repeat;">
            <div class="container text-center">
                <div class="row g-4">
                    <div class="col-6 col-md-3">
                        <h2 class="display-5 fw-bold">1035</h2>
                        <p>Total Experts</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h2 class="display-5 fw-bold">1035</h2>
                        <p>Services Done</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h2 class="display-5 fw-bold">1226</h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h2 class="display-5 fw-bold">1035</h2>
                        <p>Total Services</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="industries" class="container services-section py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-700">Industries <span class="text-primary">We Serve</span></h2>
                    <p class="text-muted">Delivering quality sealing and engineering solutions tailored to diverse
                        industries.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card text-center p-4 h-100 border-0 shadow-sm">
                            <i class="fa fa-solid fa-industry fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Oil & Gas</h5>
                            <p class="text-muted">Providing sealing solutions designed to perform reliably in harsh
                                oil and gas extraction and processing conditions.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card text-center p-4 h-100 border-0 shadow-sm">
                            <i class="fa fa-solid fa-flask fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Chemical & Petrochemical</h5>
                            <p class="text-muted">Specialized seals designed to withstand corrosive chemicals and
                                high temperatures common to chemical processing plants.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card text-center p-4 h-100 border-0 shadow-sm">
                            <i class="fa fa-solid fa-water fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Water Treatment</h5>
                            <p class="text-muted">Sealing solutions tailored for municipal and industrial water
                                treatment operations ensuring contamination-free equipment.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card text-center p-4 h-100 border-0 shadow-sm">
                            <i class="fa fa-solid fa-cogs fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Power Generation</h5>
                            <p class="text-muted">High-performance seals built to withstand the extreme conditions
                                of thermal, hydro, and nuclear power generation.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card text-center p-4 h-100 border-0 shadow-sm">
                            <i class="fa fa-solid fa-capsules fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Pharmaceuticals</h5>
                            <p class="text-muted">Sanitary and contamination-free seal designs meeting strict
                                hygiene standards for pharma and biotech industries.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card text-center p-4 h-100 border-0 shadow-sm">
                            <i class="fa fa-solid fa-utensils fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Food & Beverage</h5>
                            <p class="text-muted">Sealing solutions designed to ensure safety, hygiene, and
                                regulatory compliance in food and beverage processing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="choose-us-section py-5">
            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT SIDE -->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <span class="small text-dark fw-bold"> Why Seal Art ?</span>
                        <h2 class="display-4 fw-bold text-dark my-3">
                            The <span class="text-primary"> Seal Art</span> <br> Difference
                        </h2>
                        <p class="text-muted mb-4">
                            For over a decade, we've been a proud service provider, earning and maintaining
                            the trust of industries worldwide with precision sealing solutions.
                        </p>
                        <div class="d-flex gap-4">
                            <a href="tel:+1234567890" class="cta-link">Call Now →</a>
                        </div>
                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="col-lg-6">
                        <div class="features-box">

                            <div class="feature-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-scale-balanced"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Proven Expertise</h5>
                                    <p class="text-muted mb-0">Over a decade of delivering precision mechanical sealing
                                        solutions.</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-certificate"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Quality Assurance</h5>
                                    <p class="text-muted mb-0">Strict adherence to API and DIN standards for superior
                                        product performance.</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-lightbulb"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Custom Solutions</h5>
                                    <p class="text-muted mb-0">Tailored designs to meet unique industrial requirements.
                                    </p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Reliable Support</h5>
                                    <p class="text-muted mb-0">Dedicated technical support and on-time service delivery.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

       <x-contact/>
        
       @if($testimonials->count() > 0)
            <section id="testimonials" class="testimonials-section py-5 bg-light">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="fw-700">What Our <span class="text-primary">Clients Say</span></h2>
                        <p class="text-muted">Trusted by industries worldwide for quality sealing solutions.</p>
                    </div>

                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($testimonials as $key => $testimonial)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="card testimonial-card border-0 shadow-sm text-center p-4 mx-auto"
                                        style="max-width:700px;">
                                        
                                        <!-- Testimonial Image -->
                                        <img src="{{ asset('storage/' . $testimonial->image) }}" 
                                            alt="{{ $testimonial->name }}" 
                                            class="testimonial-img mx-auto mb-3 rounded-circle" 
                                            style="width:80px; height:80px; object-fit:cover;">
                                        
                                        <!-- Testimonial Content -->
                                        <p class="text-muted">"{{ $testimonial->content }}"</p>
                                        <h5 class="fw-bold mt-3 mb-0">{{ $testimonial->name }}</h5>
                                        <small class="text-primary">{{ $testimonial->designation }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="prev">
                            <span class="fa-solid fa-chevron-left text-primary fs-3"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="next">
                            <span class="fa-solid fa-chevron-right text-primary fs-3"></span>
                        </button>
                    </div>
                </div>
            </section>
        @endif

  
@endsection