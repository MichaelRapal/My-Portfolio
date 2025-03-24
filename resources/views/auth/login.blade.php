<x-guest-layout>
    <style>
        body {
            background: linear-gradient(to bottom right, #4a90e2, #ffffff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            width: 100%;
            width: 400px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-control {
            border-radius: 8px;
            padding: 10px;
            width: 100%;
        }
        .btn-primary {
            border-radius: 8px;
            padding: 10px;
            transition: all 0.3s ease-in-out;
        

        }
        .btn-primary:hover {
            background-color: #357ae8;
            transform: scale(1.05);
        }
    </style>

    <div class="login-card">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control mt-1" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        
            <div class="d-flex justify-content-between align-items-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                   
                    </a>
                @endif
                <x-primary-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>