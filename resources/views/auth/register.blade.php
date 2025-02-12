<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('req-frontend/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('req-frontend/css/style.css') }}">
</head>
<body>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="main">

            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <h2 class="form-title">Create account</h2>

                        <div class="form-group">
                            <input placeholder="Nama" class="form-input block mt-1 w-full" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"/>
                            @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input placeholder="Email" class="form-input block mt-1 w-full" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"/>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input placeholder="Password" class="form-input block mt-1 w-full" type="password" name="password" id="password" required autocomplete="new-password"/>
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input placeholder="Repeat your password" class="form-input block mt-1 w-full" type="password" name="password_confirmation" id="password_confirmation" required/>
                            @error('password_confirmation')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button type="submit" class="btn btn-primary ms-4">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </div>
                </div>
            </section>

        </div>

    </form>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('reg-frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('reg-frontend/js/main.js') }}"></script>
</body>
</html>
