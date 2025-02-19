<!doctype html>
<html lang="en">
  <head>
    <title>Login #10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/frondend/css/style.css')}}">
  </head>
  <body class="img js-fullheight" style="background-image: url(/frondend/images/bg.jpg);">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Login #10</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">Have an account?</h3>

              <!-- Form Login -->
              <form action="{{ route('login') }}" method="POST" class="signin-form">
                @csrf <!-- CSRF Token untuk keamanan Laravel -->

                <!-- Input Email -->
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <!-- Input Password -->
                <div class="form-group">
                  <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary">Remember Me
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#" style="color: #fff">Forgot Password</a>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>
