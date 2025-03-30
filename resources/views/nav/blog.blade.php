@extends('welcome')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Structure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .org-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .org-item:hover {
            background-color: #4431d2;
            transition: 0.3s;
        }

        .org-item img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
            border: 3px solid #c40b0b;
            transition: transform 0.3s ease;
        }

        .org-item:hover img {
            transform: scale(1.1);
        }

        .org-details h5 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .org-details p {
            font-size: 16px;
            margin-bottom: 0;
            color: #1d0f0f;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
            text-transform: uppercase;
            color: #1025c3;
            position: relative;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 80px;
            height: 3px;
            background: #1025c3;
            margin: 8px auto 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center my-4">Organizational Structure</h2>

    <h3 class="section-title">Deans/Program Heads</h3>
    <ul class="list-unstyled">
        @foreach([
            ['VENTURES.jpg', 'VENTURES, ALFONSO R. (MSIS)', 'College Administrator / Dean of BSIT'],
            ['ROBLES.jpg', 'ROBLES, MA. CARMELITA D., DBM', 'Director for Instruction / Dean of BSBA'],
            ['PADASAS.jpg', 'PADASAS, GEMMA D. (MM)', 'Dean of BSHM/Specialized Trainings Director'],
            ['TEDLOS.jpg', 'TEDLOS,  NENA A., Ed.D', 'Dean of BEED'],
            ['MAYORDOMO.jpg', 'MAYORDOMO, MARLON L.', 'Director for Administration/General Services Director'],
        ] as $index => $person)
        <li class="org-item" style="animation-delay: {{ $index * 0.1 }}s;">
            <img src="{{ asset('storage/images/head/' . $person[0]) }}" alt="{{ $person[1] }}">
            <div class="org-details">
                <h5>{{ $person[1] }}</h5>
                <p>{{ $person[2] }}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <h3 class="section-title">Faculty Members</h3>
    <ul class="list-unstyled">
        @foreach([
            ['ALBESA.jpg', 'ALBESA, JACKY O., LPT', 'Instructor - PE'],
            ['ALFEREZ.jpg', 'ALFEREZ, ARNEL B.', 'Instructor - BSED Mathematics'],
            ['BANAWAN.jpg', 'BANAWAN, CHERRY MAE T., LPT', 'Instructor - English'],
            ['BITANG.jpg', 'BITANG, JEZZA FAITH H., LPT', 'Instructor - Science'],
        ] as $index => $faculty)
        <li class="org-item" style="animation-delay: {{ $index * 0.1 }}s;">
            <img src="{{ asset('storage/images/faculty/' . $faculty[0]) }}" alt="{{ $faculty[1] }}">
            <div class="org-details">
                <h5>{{ $faculty[1] }}</h5>
                <p>{{ $faculty[2] }}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <h3 class="section-title">Admin Staff</h3>
    <ul class="list-unstyled">
        @foreach([
            ['BALABA.jpg', 'BALABA, CRISTY L.', 'HR Coordinator'],
            ['BELTRAN.jpg', 'BELTRAN, CHRISTIAN A.', 'Registrar Staff'],
            ['BENANING.jpg', 'BENANING, JESSEL P.', 'Payroll In-charge'],
            ['FERNANDEZ N.jpg', 'FERNANDEZ, NELVIN R.', 'School Registrar'],
        ] as $index => $staff)
        <li class="org-item" style="animation-delay: {{ $index * 0.1 }}s;">
            <img src="{{ asset('storage/images/staff/' . $staff[0]) }}" alt="{{ $staff[1] }}">
            <div class="org-details">
                <h5>{{ $staff[1] }}</h5>
                <p>{{ $staff[2] }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection