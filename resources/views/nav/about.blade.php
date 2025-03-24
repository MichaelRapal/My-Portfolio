@extends('welcome')

@section('content')
<!-- Include Bootstrap, AOS, FontAwesome, and Typed.js -->
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> 
    
    <style>
       
        body {
            background: linear-gradient(to right, #ffffff, #4a90e2);
        }
        .about-section {
            padding-left: 50px; 
        }

       
        .greeting {
            font-size: 28px; 
            font-weight: 400;
        }

        .name {
            font-size: 56px; 
            font-weight: bold;
            display: inline-block;
            white-space: nowrap;
        }

        .highlight {
            color: #4a90e2;
        }

     
        .position {
            font-size: 36px;
            font-weight: bold;
            margin-top: -10px;
        }

       
        .description {
            font-size: 20px;
            font-style: italic;
            margin-bottom: 20px;
            text-align: justify;
        }

       
        .contact-info {
            list-style: none;
            padding: 0;
            font-size: 18px; 
        }

        .contact-info i {
            color: #4a90e2;
            margin-right: 10px;
        }

        .profile-pic {
            width: 320px; 
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<div class="py-5">
    <div class="row align-items-center">
       
        <div class="col-md-6 about-section" data-aos="fade-right">
            <h2 class="greeting fw-light">Hi!</h2>
            <h1 class="name fw-bold">
                I'm <span id="typed-name" class="highlight"></span>
            </h1>
            <h2 class="position text-primary">A System Administrator</h2>
            <p class="description text-muted">
                <br> With a passion for technology, data-driven solutions, and IT infrastructure management. 
                I graduated from ACES Tagum College, Inc. with a Bachelor of Science in Information Technology (BSIT).
                I specialize in data analysis, system administration, and IT support, ensuring seamless operations 
                and optimal performance in digital environments.<br><br>
                With a strong background in graphic design, I bring a creative touch to technical problem-solving.
                Based in Tagum City, Davao del Norte, I am always eager to learn new technologies, optimize systems, 
                and analyze data to drive meaningful insights.
                Let's connect and build something great together!<br><br>
            </p>
            <ul class="contact-info">
                <li><i class="fas fa-map-marker-alt"></i> Bll L7 Tagum City, Davao del Norte, Philippines</li>
                <li><i class="fas fa-phone"></i> (+63) 9065617691</li>
                <li><i class="fas fa-envelope"></i> michaelrapal21@email.com</li>
            </ul>
        </div>

        
        <div class="col-md-6 text-center" data-aos="fade-up">
            <img src="{{ asset('storage/images/profile.png') }}" alt="Profile Image" class="profile-pic">
        </div>
    </div>
</div>

<!-- Include AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    
    var typed = new Typed("#typed-name", {
        strings: ["Michael Ian Rapal"], // Your name to be typed
        typeSpeed: 150, // Speed of typing
        backSpeed: 75, // Speed of backspacing (if looping)
        startDelay: 500, // Delay before typing starts
        backDelay: 2000, // Delay before erasing
        loop: true, // Repeat infinitely
        showCursor: true, // Show blinking cursor
    });
</script>
@endsection
