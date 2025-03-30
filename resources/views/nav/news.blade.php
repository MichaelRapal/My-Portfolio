@extends('welcome')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding Screens</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="d-flex flex-column align-items-center min-vh-100 pt-5">
    
        <!-- Title -->
        <h1 class="project-title text-center mb-2">Academic Clubs</h1>
        <div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 p-6">
        @php
            $cards = [
                [
                    'id' => 1,
                    'title' => 'Computer Society',
                    'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.',
                    'image' => asset('storage/images/poster1.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('projects'),
                ],
                [
                    'id' => 2,
                    'title' => 'CulBake Club',
                    'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.',
                    'image' => asset('storage/images/poster2.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('home'),
                ],
                [
                    'id' => 3,
                    'title' => 'Society of Automative Technology (SATS)',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster3.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 4,
                    'title' => 'Junior Financial Executives of the Philippines (JFINEX)',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 5,
                    'title' => 'Junior People Management Association of the Philippines (JMAP)',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster3.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 6,
                    'title' => 'Math Society',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 7,
                    'title' => 'English Linguist Club',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 8,
                    'title' => 'Filipiniana Club',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 8,
                    'title' => 'Bartending Club',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 8,
                    'title' => 'Business Management Association of the Philippines (BMAP)',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
            ];

        @endphp

        @foreach ($cards as $card)
        <div class="bg-white-500 text-white shadow-lg rounded-xl overflow-hidden p-6 animate-fade-in transition duration-500 hover:shadow-2xl hover:bg-blue-600 flex flex-col h-full">
            <h1 class="text-gray-200 text-6xl font-bold">0{{ $card['id'] }}</h1>
            <h2 class="text-gray-900 text-xl font-semibold mt-2">{{ $card['title'] }}</h2>
            <p class="text-gray-600 mt-2 text-sm">{{ $card['description'] }}</p>
            <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="mt-4 w-full h-40 object-cover rounded-lg transform transition duration-300 hover:scale-105">
            
            <!-- Spacing for the button to stay at the bottom -->
            <div class="flex-grow"></div> 
        
            <a href="{{ $card['route'] }}">
                <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-full text-sm transition duration-300 hover:bg-red-700 focus:bg-red-800 focus:ring focus:ring-red-400 w-full">
                    {{ $card['buttonText'] }}
                </button>
            </a>
        </div>
        @endforeach
    </div>



 



    <div class="d-flex flex-column align-items-center min-vh-100 pt-5">
    
        <!-- Title -->
        <h1 class="project-title text-center mb-2"><br>Non-Academic Clubs</h1>
    
        <div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 p-6">
        @php
            $cards = [
                [
                    'id' => 1,
                    'title' => 'Red Cross Youth',
                    'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.',
                    'image' => asset('storage/images/poster1.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('projects'),
                ],
                [
                    'id' => 2,
                    'title' => 'Peer Facilitators',
                    'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.',
                    'image' => asset('storage/images/poster2.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('home'),
                ],
                [
                    'id' => 3,
                    'title' => 'Penta Club',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster3.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 4,
                    'title' => 'Christ Ambassadors',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 5,
                    'title' => 'Earth Savors Club',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster3.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 6,
                    'title' => 'Sports Club',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 7,
                    'title' => 'Shutters Hub',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 8,
                    'title' => 'PSALM',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
            ];

        @endphp

        @foreach ($cards as $card)
        <div class="bg-white-500 text-white shadow-lg rounded-xl overflow-hidden p-6 animate-fade-in transition duration-500 hover:shadow-2xl hover:bg-blue-600 flex flex-col h-full">
            <h1 class="text-gray-200 text-6xl font-bold">0{{ $card['id'] }}</h1>
            <h2 class="text-gray-900 text-xl font-semibold mt-2">{{ $card['title'] }}</h2>
            <p class="text-gray-600 mt-2 text-sm">{{ $card['description'] }}</p>
            <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="mt-4 w-full h-40 object-cover rounded-lg transform transition duration-300 hover:scale-105">
            
            <!-- Spacing for the button to stay at the bottom -->
            <div class="flex-grow"></div> 

            <a href="{{ $card['route'] }}">
                <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-full text-sm transition duration-300 hover:bg-red-700 focus:bg-red-800 focus:ring focus:ring-red-400 w-full">
                    {{ $card['buttonText'] }}
                </button>
            </a>
        </div>
        @endforeach
        </div>




    
    <div class="d-flex flex-column align-items-center min-vh-100 pt-5">
    
        <!-- Title -->
        <h1 class="project-title text-center mb-2"><br>Organizations</h1>
    
        <div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 p-6">
        @php
            $cards = [
                [
                    'id' => 1,
                    'title' => 'Aces Glimpse',
                    'description' => 'Manage and organize personal, professional & business life in a cloud-based hub.',
                    'image' => asset('storage/images/poster1.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('projects'),
                ],
                [
                    'id' => 2,
                    'title' => 'School Disaster Risk Reduction Management (SDRRM)',
                    'description' => 'By setting up different contact groups, you can determine what kind of content your contacts see on your feed.',
                    'image' => asset('storage/images/poster2.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('home'),
                ],
                [
                    'id' => 3,
                    'title' => 'Cultural Arts',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster3.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 4,
                    'title' => 'Bagong Sibol Dance Troupe',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 5,
                    'title' => 'Marching Band',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster3.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 6,
                    'title' => 'Music Band',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 7,
                    'title' => 'Songster',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
                [
                    'id' => 8,
                    'title' => 'Federation of Business Administrators (FBA)',
                    'description' => 'Create an online resume that is easy to follow and shows all your awesome skills.',
                    'image' => asset('storage/images/poster4.jpg'),
                    'buttonText' => 'See More',
                    'route' => route('blog'),
                ],
            ];

        @endphp

            @foreach ($cards as $card)
            <div class="bg-white-500 text-white shadow-lg rounded-xl overflow-hidden p-6 animate-fade-in transition duration-500 hover:shadow-2xl hover:bg-blue-600 flex flex-col h-full">
                <h1 class="text-gray-200 text-6xl font-bold">0{{ $card['id'] }}</h1>
                <h2 class="text-gray-900 text-xl font-semibold mt-2">{{ $card['title'] }}</h2>
                <p class="text-gray-600 mt-2 text-sm">{{ $card['description'] }}</p>
                <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="mt-4 w-full h-40 object-cover rounded-lg transform transition duration-300 hover:scale-105">
                
                <!-- Spacing for the button to stay at the bottom -->
                <div class="flex-grow"></div> 

                <a href="{{ $card['route'] }}">
                    <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded-full text-sm transition duration-300 hover:bg-red-700 focus:bg-red-800 focus:ring focus:ring-red-400 w-full">
                        {{ $card['buttonText'] }}
                    </button>
                </a>
            </div>
            @endforeach
            </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
