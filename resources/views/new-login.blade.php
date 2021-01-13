<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Login Toko Tanduran</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('/wlogin/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/wlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/wlogin/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/wlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
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

            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf

                <span class="login100-form-title">
						Login Member
					</span>

                <div class="wrap-input100 validate-input" data-validate="Email tidak valid: ex@abc.xyz">
                    <input id="email" class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email">

                    @error('email')
                    <span class="float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input id="password" class="input100 @error('password') is-invalid @enderror" type="password"
                           name="password" placeholder="Password">
                    @error('password')
                    <span class="float-left" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                    <div class="text-center p-t-120">
                        <a class="txt2" href="{{ route('register')}}">
                            Daftar Sekarang
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

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
            </form>
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
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ asset('/wlogin/js/main.js')}}"></script>

</body>
</html>
