@extends('welcome')

@section('content')

<!-- Education Background Section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Timeline</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Gradient Background */
        body {
            background: linear-gradient(to right, #4a90e2, #ffffff);
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        /* Timeline Line */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 50px auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #4a90e2;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        /* Timeline Containers */
        .container-box {
            padding: 20px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-in-out;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        /* Circles on Timeline */
        .container-box::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: #4a90e2;
            border: 4px solid #ffffff;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .right::after {
            left: -10px;
        }

        /* Timeline Content */
        .content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            position: relative;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .content:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Animation Effect */
        .fade-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 20px;
            }

            .container-box {
                width: 100%;
                padding-left: 50px;
                padding-right: 25px;
            }

            .container-box::after {
                left: 10px;
            }

            .right {
                left: 0%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="text-center mt-5 text-dark">Educational Background</h2>
        <p class="text-center text-muted">My educational journey highlights my passion for learning and skill development.</p>

        <div class="timeline">
            <div class="container-box left">
                <div class="content">
                    <h4>New Leyte Elementary School</h4>
                    <p><strong>Graduation Year:</strong> 2013 - 2014</p>
                    <p>Location: New Leyte, Maco, Davao de Oro</p>
                </div>
            </div>

            <div class="container-box right">
                <div class="content">
                    <h4>New Leyte National High School</h4>
                    <p><strong>Graduation Year:</strong> 2017 - 2018</p>
                    <p>Location: New Leyte, Maco, Davao de Oro</p>
                </div>
            </div>

            <div class="container-box left">
                <div class="content">
                    <h4>Aces Tagum College, Inc.</h4>
                    <p><strong>Program:</strong> Technical-Vocational Livelihood (TVL) in ICT</p>
                    <p><strong>Graduation Year:</strong> 2018 - 2019</p>
                    <p>Location: Mankilam, Tagum City, Davao del Norte</p>
                </div>
            </div>

            <div class="container-box right">
                <div class="content">
                    <h4>Aces Tagum College, Inc.</h4>
                    <p><strong>Degree:</strong> BS in Information Technology</p>
                    <p><strong>Expected Graduation:</strong> 2024 - 2025</p>
                    <p>Location: Mankilam, Tagum City, Davao del Norte</p>
                </div>
            </div>
        </div>
    </div>

 
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const elements = document.querySelectorAll(".container-box");

            function checkScroll() {
                elements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 100) {
                        element.classList.add("fade-in");
                    }
                });
            }

            window.addEventListener("scroll", checkScroll);
            checkScroll();
        });
    </script>

</body>
</html>

@endsection
