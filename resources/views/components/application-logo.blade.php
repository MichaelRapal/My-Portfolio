
<style>
    .logo-container {
      display: flex;
      justify-content: center; /* Centers horizontally */
      align-items: center; /* Centers vertically */
      height: 20vh; /* Full viewport height */
    }
  
    .profile-pic {
      width: 50px;  /* Adjust the size */
      height: auto; /* Maintain aspect ratio */
    }
  
    button {
      background: none;
      border: none;
      cursor: pointer;
    }
  </style>
  
  <div class="logo-container">
    <button onclick="yourFunction()">
      <img src="{{ asset('storage/images/home.png') }}" alt="Home" class="profile-pic">
    </button>
  </div>
  
