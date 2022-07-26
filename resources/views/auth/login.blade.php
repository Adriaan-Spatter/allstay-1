<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('components._links')
    <title>Document</title>
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <label for="email">Email:</label>
        
                <input id="email" type="email" name="email" :value="old('email')" required/>
            </div>
            <!-- Password -->
            <div>
                <label for="password">Password:</label>
        
                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <div>
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>
        
            <div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
        
                <button>
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
    @include('components._scripts')
</body>
</html>