<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Dynamic Meta Title --}}
    <title>
        @hasSection('title')
            @yield('title') | {{ $profile->name ?? config('app.name') }}
        @else
            {{ $profile->meta_title ?? $profile->name ?? config('app.name') }}
        @endif
    </title>

    {{-- Meta Description --}}
    <meta name="description" content="@yield('meta_description', $profile->meta_description ?? '')">

    {{-- Meta Title (optional) --}}
    <meta name="title" content="@yield('meta_title', $profile->meta_title ?? '')">

    {{-- Favicon --}}
    @if(!empty($profile?->favicon))
        <link rel="icon" type="image/png" href="{{ asset('storage/'.$profile->favicon) }}">
    @endif

    {{-- Social / Open Graph --}}
    <meta property="og:title" content="@yield('title', $profile->name )">
    <meta property="og:description" content="@yield('meta_description', $profile->meta_description ?? '')">
    <meta property="og:image" content="{{ asset('storage/'.$profile->og_image ?? '') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', $profile->name )">
    <meta name="twitter:description" content="@yield('meta_description', $profile->meta_description ?? '')">
    <meta name="twitter:image" content="{{ asset('storage/'.$profile->og_image ?? '') }}">


    <!-- Font Awesome Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    
    @include('layout.header')
    <main style="padding-top: 80px;">
        @yield('content')
    </main>
    
    <a href="https://api.whatsapp.com/send?phone=<?=$profile->whatsapp ?? '7203070468'?>&text=hello" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    @include('layout.footer')

      <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.navbar');
            nav.classList.toggle('scrolled', window.scrollY > 50);
        });


        // Contact Form Validation
        (function () {
            "use strict";

            const form = document.querySelector("#contactForm");
            const message = document.querySelector("#message");
            const messageFeedback = document.querySelector("#messageFeedback");

            function containsHTML(text) {
                const htmlPattern = /<\/?[\w\s="/.':;#-\/\?]+>/gi;
                return htmlPattern.test(text);
            }

            form.addEventListener(
                "submit",
                function (e) {
                    if (containsHTML(message.value)) {
                        message.setCustomValidity("Message cannot contain HTML tags.");
                        messageFeedback.style.display = "block";
                    } else {
                        message.setCustomValidity("");
                        messageFeedback.style.display = "none";
                    }
                    if (!form.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    form.classList.add("was-validated");
                },
                false
            );
        })();




        // smooth behavior 
        document.querySelectorAll('a.nav-link[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetID = this.getAttribute('href');
                const targetElement = document.querySelector(targetID);
                if (targetElement) {
                    const yOffset = -80; // Adjust for fixed navbar height
                    const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
            });
        });


        // auto hide alert
        window.addEventListener('DOMContentLoaded', () => {
            const alert = document.querySelector('.custom-alert');
            if(alert){
                setTimeout(() => {
                    // Fade out
                    alert.classList.remove('show');
                    alert.classList.add('hide');
                }, 5000); // 5 seconds
            }
        });

    </script>
</body>
</html>
