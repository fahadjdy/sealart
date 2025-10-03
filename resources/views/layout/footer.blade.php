     <footer class="text-white pt-5 bg-primary" >
    <div class="container py-5">
        <div class="row">
            <!-- Company Info -->
          <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Seal Art</h5>
                <p>{{ \Illuminate\Support\Str::limit($profile->about, 180, '...') }} <a href="{{ url('about')}}" class="text-white text-decoration-none">view more</a></p>
            </div>


            <!-- Products Links -->
            <div class="col-md-2 mb-4">
                <h6 class="fw-bold mb-3">Latest Products</h6>
                <ul class="list-unstyled">
                    @foreach ($latestProduct as $item)
                        <li><a href="{{ route('products.show', $item->slug) }}" class="text-white text-decoration-none">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Useful Links -->
            <div class="col-md-2 mb-4">
                <h6 class="fw-bold mb-3">Useful Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/')}}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ url('about')}}" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="{{ url('products')}}" class="text-white text-decoration-none">Products</a></li>
                    <li><a href="{{ url('contact')}}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h6 class="fw-bold mb-3">Contact</h6>
                <p><i class="fas fa-map-marker-alt me-2"></i> <?=$profile->location?> <?=$profile->city?>, <?=$profile->state?>, <?=$profile->pincode?></p>
                <p><i class="fas fa-phone me-2"></i> +91 <?=$profile->contact?></p>
                <p><i class="fas fa-envelope me-2"></i> <?=$profile->email?></p>
            </div>
        </div>

        <hr class="border-light" />
        <div class="text-center pt-3">
            <small>© 2025 Seal Art . All rights reserved.  | Developed by : <a target="_blank" href="https://fahad-jadiya.com/" class="text-white">Fahad Jadiya</a></small>
        </div>
    </div>

    <!-- Include Font Awesome CDN for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</footer>
