<style>
    body {
        background-color: #f7fafc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .login-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 40px;
        background-color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .login-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .social-link {
        margin-right: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        padding: 12px 20px;
        font-size: 16px;
        text-decoration: none;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    .social-link i {
        margin-right: 10px;
    }

    .social-link.google {
        background-color: #db4437;
        color: white;
    }

    .social-link.google:hover {
        background-color: #c1351d;
    }

    .btn {
        width: 100%;
        padding: 12px;
        font-weight: 500;
        text-transform: uppercase;
        background-color: #4CAF50;
        color: white;
        border-radius: 8px;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }

    .input-group input:focus {
        border-color: #4CAF50;
        outline: none;
    }

    .remember-me {
        display: flex;
        align-items: center;
        font-size: 14px;
        color: #555;
    }

    .remember-me input {
        margin-right: 8px;
    }

    .forgot-password {
        text-align: right;
        font-size: 14px;
        color: #4CAF50;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }

    .google-icon{
        width:30px;
        height:30px;
        margin-right:5px;
    }
</style>


<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        {{-- Social Login Section --}}
        <div class="flex items-center mt-4 space-x-4">
            {{-- Login with Google --}}
            <a title="Login with Google" href="{{ route('auth.redirection', 'google') }}" class="social-link google text-center btn btn-block">
                <img src="{{asset('assets/icons/google-icon.png')}}" alt=""  class="google-icon"> {{ __('Login with Google') }}
            </a>
        </div>

    </form>
</x-guest-layout>
