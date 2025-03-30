@extends('welcome')
@section('content')

<style>
    .club-card {
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        padding: 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .club-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background: #006BFF;
    }
    .see-more-btn {
        margin-top: auto; /* Pushes the button to the bottom */
        background: #e63946;
        color: white;
        padding: 10px 24px;
        margin-top: 25px;
        border-radius: 24px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        transition: background 0.3s ease;
    }
    .see-more-btn:hover {
        background: #c53030;
    }
    .titlenum{
        font-size: 70px;
        color: #EEEEEE;
        margin-left: -130px;
        font-weight: bold;
    }
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }
    .modal-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        width: 50%;
        text-align: center;
    }
    .close-btn {
        background: #e63946;
        color: white;
        padding: 6px 10px;
        border-radius: 12px;
        font-size: 12px;
        cursor: pointer;
        border: none;
        width: 80px;
        text-align: center;
        transition: background 0.3s ease;
        display: block; /* Ensures it behaves like a block element */
        margin: 10px auto 0; /* Centers it horizontally */
       
    }
</style>

<h1 style="text-align: center; font-size: 24px; font-weight: bold; margin: 24px 0;">Academic Clubs</h1>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; padding: 0 24px;">
    @php
        $academicClubs = [
            ['id' => 1, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society , hackathons, and tech talks Join the Computer Society to participate in coding Join the Computer Society to participate in cJoin the Computer Society to participJoin the Computer Society to participate in coding challenges, hackathons, and tech talks.ate in coding challenges, hackathons, and tech talks.oding challenges, hackathons, and tech talks.challenges, hackathons, and tech talks..', 'image' => asset('storage/images/poster1.jpg')],
            ['id' => 2, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster2.jpg')],
            ['id' => 3, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster3.jpg')],
            ['id' => 4, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster4.jpg')],
            ['id' => 5, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'A club dedicated to tnd programming lovers.', 'image' => asset('storage/images/poster1.jpg')],
            ['id' => 6, 'title' => 'Computer Society', 'description' => 'A club dedicated to technology enthusiasts and programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster1.jpg')],
            
        ];
    @endphp
    
    @foreach ($academicClubs as $club)
    <div class="club-card">
        <h1 class="titlenum">0{{ $club['id'] }}</h1>
        <h2>{{ $club['title'] }}</h2>
        <p>{{ $club['description'] }}</p>
        <img src="{{ $club['image'] }}" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        <button class="see-more-btn" onclick="openModal({{ $club['id'] }})">See More</button>
    </div>

    <div id="modal-{{ $club['id'] }}" class="modal">
        <div class="modal-content">
            <h2>{{ $club['title'] }}</h2>
            <p>{{ $club['modalText'] }}</p>
            <button class="close-btn" onclick="closeModal({{ $club['id'] }})">Cancel</button>
        </div>
    </div>
    @endforeach
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).style.display = 'flex';
    }
    function closeModal(id) {
        document.getElementById('modal-' + id).style.display = 'none';
    }
</script>








<h1 style="text-align: center; font-size: 24px; font-weight: bold; margin: 24px 0;">Non-Academic Clubs</h1>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; padding: 0 24px;">
    @php
        $academicClubs = [
            ['id' => 1, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society , hackathons, and tech talks Join the Computer Society to participate in coding Join the Computer Society to participate in cJoin the Computer Society to participJoin the Computer Society to participate in coding challenges, hackathons, and tech talks.ate in coding challenges, hackathons, and tech talks.oding challenges, hackathons, and tech talks.challenges, hackathons, and tech talks..', 'image' => asset('storage/images/poster1.jpg')],
            ['id' => 2, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster2.jpg')],
            ['id' => 3, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster3.jpg')],
            ['id' => 4, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster4.jpg')],
            ['id' => 5, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'A club dedicated to tnd programming lovers.', 'image' => asset('storage/images/poster1.jpg')],
            ['id' => 6, 'title' => 'Computer Society', 'description' => 'A club dedicated to technology enthusiasts and programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster1.jpg')],
            
        ];
    @endphp
    
    @foreach ($academicClubs as $club)
    <div class="club-card">
        <h1 class="titlenum">0{{ $club['id'] }}</h1>
        <h2>{{ $club['title'] }}</h2>
        <p>{{ $club['description'] }}</p>
        <img src="{{ $club['image'] }}" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        <button class="see-more-btn" onclick="openModal({{ $club['id'] }})">See More</button>
    </div>

    <div id="modal-{{ $club['id'] }}" class="modal">
        <div class="modal-content">
            <h2>{{ $club['title'] }}</h2>
            <p>{{ $club['modalText'] }}</p>
            <button class="close-btn" onclick="closeModal({{ $club['id'] }})">Cancel</button>
        </div>
    </div>
    @endforeach
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).style.display = 'flex';
    }
    function closeModal(id) {
        document.getElementById('modal-' + id).style.display = 'none';
    }
</script>





<h1 style="text-align: center; font-size: 24px; font-weight: bold; margin: 24px 0;">Organizations</h1>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; padding: 0 24px;">
    @php
        $academicClubs = [
            ['id' => 1, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society , hackathons, and tech talks Join the Computer Society to participate in coding Join the Computer Society to participate in cJoin the Computer Society to participJoin the Computer Society to participate in coding challenges, hackathons, and tech talks.ate in coding challenges, hackathons, and tech talks.oding challenges, hackathons, and tech talks.challenges, hackathons, and tech talks..', 'image' => asset('storage/images/poster1.jpg')],
            ['id' => 2, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster2.jpg')],
            ['id' => 3, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster3.jpg')],
            ['id' => 4, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster4.jpg')],
            ['id' => 5, 'title' => 'Computer Society', 'description' => 'A club dedicated to tnd programming lovers.', 'modalText' => 'A club dedicated to tnd programming lovers.', 'image' => asset('storage/images/poster1.jpg')],
            ['id' => 6, 'title' => 'Computer Society', 'description' => 'A club dedicated to technology enthusiasts and programming lovers.', 'modalText' => 'Join the Computer Society to participate in coding challenges, hackathons, and tech talks.', 'image' => asset('storage/images/poster1.jpg')],
            
        ];
    @endphp
    
    @foreach ($academicClubs as $club)
    <div class="club-card">
        <h1 class="titlenum">0{{ $club['id'] }}</h1>
        <h2>{{ $club['title'] }}</h2>
        <p>{{ $club['description'] }}</p>
        <img src="{{ $club['image'] }}" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
        <button class="see-more-btn" onclick="openModal({{ $club['id'] }})">See More</button>
    </div>

    <div id="modal-{{ $club['id'] }}" class="modal">
        <div class="modal-content">
            <h2>{{ $club['title'] }}</h2>
            <p>{{ $club['modalText'] }}</p>
            <button class="close-btn" onclick="closeModal({{ $club['id'] }})">Cancel</button>
        </div>
    </div>
    @endforeach
</div>

<script>
    function openModal(id) {
        document.getElementById('modal-' + id).style.display = 'flex';
    }
    function closeModal(id) {
        document.getElementById('modal-' + id).style.display = 'none';
    }
</script>




@endsection
