<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <!-- Boxicons -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <style>
        /* Navbar Animation */
        .navbar {
            transition: all 0.3s ease-in-out;
        }
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
        /* Active Link */
        .nav-link.active {
            font-weight: bold;
            color: #007bff !important;
        }
     
    </style>
</head>
<body class="bg-light text-dark">
  
<!-- Navigation Bar -->
<header class="l-header">
    <nav class="nav bd-grid navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            My Portfolio
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li> 
                    <li class="nav-item"><a href="{{ route('news') }}" class="nav-link">News</a></li> 
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('try') }}" class="nav-link">Try</a></li>
                    <li class="nav-item"><a href="{{ route('education') }}" class="nav-link">Education</a></li>
                    <li class="nav-item"><a href="{{ route('skills') }}" class="nav-link">Skills</a></li>
                    <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Project</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="l-main container mt-5 pt-5">
    @yield('content')
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<!-- Custom JS -->
<script src="{{ asset('js/scripts.js') }}"></script>

<script>
    // Navbar animation on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Active link highlighting
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll(".nav-link");
        links.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add("active");
            }
        });
    });
</script>

</body>
</html>
