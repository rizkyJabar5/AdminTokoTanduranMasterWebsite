<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Register Admin Toko Tanduran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('/wlogin/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->`
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/wlogin/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('/wlogin/images/img-01.png') }}" alt="IMG">
            </div>

            <form class="login100-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title">
					Register Member
                </span>

                <div class="wrap-input100 validate-input">
                    <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Masukkan Nama" autofocus>
                    @error('name')
                    <span class="float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100" data-validate="Email tidak valid: abc@xyz.com">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan E-mail">
                    @error('email')
                    <span class="float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="symbol-input100">
                        <i class="fa fa-envelope"></i>
                    </span>
                </div>

                <div class="wrap-input100">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                    <span class="float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="wrap-input100">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="text-center p-t-120">
                    <a class="txt2" href="{{ route('login') }}">
                        Login
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="container-login100-form-btn">
               <!--
                <div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>
                -->
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{ asset('/wlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('/wlogin/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('/wlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ asset('/wlogin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('/wlogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('/wlogin/js/main.js')}}"></script>

</body>
</html>
