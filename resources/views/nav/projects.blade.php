@extends('welcome')

@section('content')

<!-- Custom Background -->
<style>
    body {
        background: linear-gradient(to bottom right, #007bff, #ffffff);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background: transparent !important;
        box-shadow: none;
    }

    .project-title {
        font-size: 2rem;
        font-weight: bold;
        color: black;
        padding: 10px 20px;
        border-radius: 10px;
        display: inline-block;
    }
</style>

<!-- Container -->
<div class="d-flex flex-column align-items-center min-vh-100 pt-5">
    
    <!-- Title -->
    <h1 class="project-title text-center mb-2">My Project</h1>

    <!-- Short Description -->
    <p class="text-center text-muted mb-4" style="max-width: 600px;">
        This is my project in graphic design, highlighting my skills in visual communication and digital artistry.
    </p>

    <!-- Bootstrap Carousel -->
    <div id="imageCarousel" class="carousel slide w-75 mb-4" data-bs-ride="carousel">
        
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="4"></button>
        </div>

        <!-- Image Slides -->
        <div class="carousel-inner rounded shadow">
            @php
                $images = [
                    'poster1.jpg', 'poster2.jpg', 'poster3.jpg', 'poster4.jpg', 'poster5.jpg'
                ];
            @endphp
            @foreach ($images as $index => $image)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/images/' . $image) }}" 
                    class="d-block w-100 rounded main-image" 
                    alt="Image {{ $index + 1 }}" 
                    style="max-height: 450px; object-fit: cover;"
                    data-bs-toggle="modal" data-bs-target="#imageModal">
            </div>
            @endforeach
        </div>

        <!-- Navigation Buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <!-- Thumbnail Gallery -->
    <div class="d-flex justify-content-center gap-2">
        @foreach ($images as $index => $image)
        <img src="{{ asset('storage/images/' . $image) }}" 
            class="thumbnail rounded border border-white shadow-sm" 
            style="width: 100px; height: 100px; object-fit: cover; cursor: pointer;" 
            onclick="changeMainImage('{{ asset('storage/images/' . $image) }}')">
        @endforeach
    </div>
</div>

<!-- Enlarged Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-body p-0">
                <img id="modalImage" class="w-100 rounded" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Change Main Image when Clicking Thumbnail
    function changeMainImage(src) {
        document.querySelector(".carousel-item.active img").src = src;
    }

    // Show Enlarged Image in Modal
    document.querySelectorAll('.main-image').forEach(img => {
        img.addEventListener('click', function() {
            document.getElementById('modalImage').src = this.src;
        });
    });
</script>

@endsection
