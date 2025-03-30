@extends('welcome')

@section('content')


<head>
    <!-- Bootstrap, AOS, FontAwesome, Animate.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <style>
        body {
            background: linear-gradient(to right, #ffffff, #4a90e2);
        }
        .skills-section {
            padding: 50px 0;
            text-align: center;
        }
        .carousel-item {
            text-align: center;
            padding: 30px;
        }
        .skills-card {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            max-width: 500px;
            margin: auto;
        }
        .skills-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 12px 35px rgba(0, 0, 255, 0.3);
        }

        .enroll-btn {
            background-color: #007bff !important;
            color: white !important;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s ease-in-out;
        }
        .enroll-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }




    </style>
</head>

<!-- ABOUT ME (Unchanged) -->
<div class="py-5">
    <div class="row align-items-center">
        <div class="col-md-6 about-section" data-aos="fade-right">
            <h2 class="greeting">Hi!</h2>
            <h1 class="name">I'm <span id="typed-name" class="highlight"></span></h1>
           
            <p class="description">
                Passionate about technology, IT infrastructure, and system security. I specialize in system administration, data analysis, and IT support.
            </p>
            <ul class="contact-info">
                <li><i class="fas fa-map-marker-alt"></i> Tagum City, Davao del Norte, Philippines</li>
                <li><i class="fas fa-phone"></i> (+63) 9065617691</li>
                <li><i class="fas fa-envelope"></i> michaelrapal21@email.com</li>
            </ul>
            <a href="{{ route('register') }}" class="btn enroll-btn mt-3">Enroll Now</a>
        </div>
        <div class="col-md-6 text-center" data-aos="fade-up">
            <img src="{{ asset('storage/images/profile.png') }}" alt="Profile Image" class="profile-pic">
        </div>
    </div>
</div>

<!-- SKILLS SECTION WITH SLIDER -->
<div class="skills-section">
    <h2 data-aos="fade-down">Subjects</h2>
    <div id="skillsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ([
                'Operating Systems & Server Management' => 'Managing Windows, Linux, and macOS servers, including user management and system security.',
                'Network & Security' => 'Understanding IP addressing, firewalls, VPNs, and cybersecurity measures to protect IT infrastructure.',
                'Cloud Computing & Virtualization' => 'Working with AWS, Azure, VMware, and containerization (Docker, Kubernetes) for scalable IT solutions.',
                'Data Management' => 'Handling MySQL, PostgreSQL, and SQL Server for data storage, backup, and recovery.',
                'Automation & Scripting' => 'Using PowerShell, Bash, or Python to automate system tasks and improve efficiency.',
                'IT Support & Troubleshooting' => 'Diagnosing and resolving hardware, software, and network issues for smooth operations.'
            ] as $title => $description)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="skills-card">
                        <h4>{{ $title }}</h4>
                        <p>{{ $description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#skillsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#skillsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- TESTIMONIAL SECTION (Unchanged) -->
<div class="testimonial-section">
    <h2 data-aos="fade-down">What People Say</h2><br><br>
    <div class="row justify-content-center">
        @foreach ([
            ['name' => 'Fritz Jimsire Gozo', 'comment' => 'Great IT support! Always available when needed.', 'image' => 'profile1.png'],
            ['name' => 'Laurento Louis Neri', 'comment' => 'Very skilled in system security and networking.', 'image' => 'profile2.png'],
            ['name' => 'Jenjean Abris', 'comment' => 'Professional and efficient in IT solutions.', 'image' => 'profile3.png'], 
        ] as $testimonial)
        <div class="col-md-4" data-aos="fade-up">
            <div class="testimonial-card p-4 d-flex align-items-center">
                <img src="{{ asset('storage/images/'.$testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="testimonial-img">
                <div>
                    <h5>{{ $testimonial['name'] }}</h5>
                    <p>{{ $testimonial['comment'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- JavaScript for Animations -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    var typed = new Typed("#typed-name", {
        strings: ["Michael Ian Rapal"],
        typeSpeed: 150,
        backSpeed: 75,
        loop: true,
    });
</script>
@endsection