 <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo" height="40">
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('products')}}">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('contact')}}">Contact</a></li>
                    </ul>
                    <a href="" class="btn btn-primary">
                        <i class="fa fa-download"></i>
                        Brochure</a>
                </div>
            </div>
        </nav>
</header>