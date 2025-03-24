<x-guest-layout>
    <style>
        body {
            background: linear-gradient(to bottom right, #4a90e2, #ffffff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.2); /* Transparent form */
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

    
        .form-control {
            border-radius: 8px;
            padding: 10px;
            width: 100%;
        }



        .form-container input,
        .form-container select {
            transition: all 0.3s ease-in-out;
        }

        .form-container input:focus,
        .form-container select:focus {
            transform: scale(1.05);
            box-shadow: 0px 0px 10px rgba(59, 130, 246, 0.6);
        }
    </style>

    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Highest Educational Level -->
            <div class="mb-3">
                <x-input-label for="highest_educational_level" :value="__('Highest Educational Level')" />
                <select id="highest_educational_level" name="highest_educational_level" class="form-select" required>
                    <option value="" disabled selected>Select your highest education level</option>
                    <option value="High School">Primary School</option>
                    <option value="Secondary School">Secondary School</option>
                    <option value="Vocational Training">Vocational Training</option>
                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                    <option value="Master's Degree">Master's Degree</option>
                    <option value="Doctorate">Doctorate</option>
                </select>
                <x-input-error :messages="$errors->get('highest_educational_level')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between align-items-center">
                <a class="text-decoration-none text-primary" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="btn btn-primary">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
