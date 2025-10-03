 <section id="contact" class="container py-5">
    <div class="container">
        <div class="mb-4 text-center">
            <p class="text-primary text-uppercase fw-semibold mb-2">Contact</p>
            <h2 class="fw-700 mb-3">Get in Touch</h2>
        </div>
        <div class="row align-items-start">
            <!-- Left Side: Map and Contact Info -->
            <div class="col-md-6 mb-4 mb-md-0">
                <ul class="list-unstyled">
                    <li class="d-flex mb-4">
                        <div class="bg-primary  rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width:40px; height:40px;">
                            <i class="fa fa-location text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Our Address</h5>
                            <p class="mb-0 text-secondary"><?=$profile->location?> <?=$profile->city?>, <?=$profile->state?>, <?=$profile->pincode?>
                            </p>
                        </div>
                    </li>
                    <li class="d-flex mb-4">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width:40px; height:40px;">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Contact</h5>
                            <p class="mb-0 text-secondary">Mobile: +91 <?=$profile->contact?></p>
                            <p class="mb-0 text-secondary">Mail: <?=$profile->email?></p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width:40px; height:40px;">
                            <i class="fa fa-clock"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Working hours</h5>
                            <p class="mb-0 text-secondary">Monday - Saturday: 08:00 - 17:00</p>
                            <p class="mb-0 text-secondary">Sunday: Close</p>
                        </div>
                    </li>
                </ul>

                @if($profile->latitude && $profile->longitude)
                <iframe
                    class="map-frame"
                    src="https://www.google.com/maps?q=<?=$profile->latitude?>,<?=$profile->longitude?>&z=15&output=embed"
                    allowfullscreen
                    width="100%"
                    height="250"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="{{ $profile->name}}">
                </iframe>
                @endif

            </div>
            <!-- Right Side: Contact Form -->
            <div class="col-md-6">
                <div class="card p-4 shadow">
                    <h2 class="mb-4">Ready to Get Started?</h2>
                   <form id="contactForm" action="{{ route('inquiries.store') }}" method="POST" novalidate>
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input type="text" id="name" name="name" 
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Your name" maxlength="100" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" id="email" name="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Your email" maxlength="150" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mobile -->
                        <div class="mb-3">
                            <label for="mobile" class="form-label fw-semibold">Mobile</label>
                            <input type="text" id="mobile" name="mobile" 
                                class="form-control @error('mobile') is-invalid @enderror"
                                placeholder="10-digit mobile number" maxlength="10" required>
                            @error('mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">Message</label>
                            <textarea id="description" name="description" 
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Write your message..." rows="5"></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>