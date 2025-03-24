@extends('welcome')

@section('content')
<head>
    <!-- Bootstrap, AOS, FontAwesome, Animate.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            background: linear-gradient(to right, #ffffff, #4a90e2);
        }
        .skills-section {
            padding: 150px 0;
            text-align: center;
        }
        .skill-card {
            position: relative;
            background: rgba(255, 255, 255, 0.2);
            padding: 50px;
            border-radius: 18px;
            width: 95%;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            overflow: hidden;
            text-align: center;
        }
        .skill-card:hover {
            transform: scale(1.06);
            box-shadow: 0px 15px 40px rgba(0, 0, 255, 0.3);
        }
        .skill-logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: opacity 0.3s ease-in-out;
        }
        .skill-logo {
            width: 90px;
            height: 90px;
        }
        .skill-title {
            margin-top: 12px;
            font-weight: bold;
            color: #000;
            font-size: 20px;
        }
        .skill-description {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        .skill-card:hover .skill-logo-container {
            opacity: 0;
        }
        .skill-card:hover .skill-description {
            opacity: 1;
        }
        @media (max-width: 768px) {
            .skill-card {
                height: 320px;
                padding: 35px;
            }
            .skill-title {
                font-size: 18px;
            }
        }
    </style>
</head>

<!-- SKILLS SECTION -->
<div class="skills-section">
    <h2 data-aos="fade-down">My Skills as System Administrator</h2><br>
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach ([
                ['logo' => 'logo1.png', 'title' => 'Operating Systems & Server Management', 'desc' => 'Managing Windows, Linux, and macOS servers, including user management and system security.'],
                ['logo' => 'logo2.png', 'title' => 'Network & Security', 'desc' => 'Understanding IP addressing, firewalls, VPNs, and cybersecurity measures to protect IT infrastructure.'],
                ['logo' => 'logo3.png', 'title' => 'Cloud Computing & Virtualization', 'desc' => 'Working with AWS, Azure, VMware, and containerization (Docker, Kubernetes) for scalable IT solutions.'],
                ['logo' => 'logo4.png', 'title' => 'Data Management', 'desc' => 'Handling MySQL, PostgreSQL, and SQL Server for data storage, backup, and recovery.'],
                ['logo' => 'logo5.png', 'title' => 'Automation & Scripting', 'desc' => 'Using PowerShell, Bash, or Python to automate system tasks and improve efficiency.'],
                ['logo' => 'logo6.png', 'title' => 'IT Support & Troubleshooting', 'desc' => 'Diagnosing and resolving hardware, software, and network issues for smooth operations.']
            ] as $index => $skill)
            <div class="col-md-4" data-aos="{{ $index < 3 ? 'fade-right' : 'fade-left' }}">
                <div class="skill-card">
                    <div class="skill-logo-container">
                        <img src="{{ asset('storage/images/' . $skill['logo']) }}" alt="Skill Logo" class="skill-logo">
                        <p class="skill-title">{{ $skill['title'] }}</p>
                    </div>
                    <div class="skill-description">
                        <h5>{{ $skill['title'] }}</h5>
                        <p>{{ $skill['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- JavaScript for Animations -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
