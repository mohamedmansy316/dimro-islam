{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@include('layouts.header')

<body>

    <div class="main-wrapper main-wrapper-3">
        @include('layouts.navbar')

        <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Login / Register</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.html">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active"> Login / Register </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-register-area bg-gray pt-155 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ms-auto me-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-bs-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-bs-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="{{route('login.post')}}" method="post">
                                                @csrf
                                                <input type="email" name="email" placeholder="Email">
                                                <input type="password" name="password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                    {{-- <a class="login-btn google" href="{{route('login.social' , 'google')}}"><i class="fab fa-google"></i> Login With Google</a> --}}
                                                </div>
                                            </form>
                                            <p class="social-title">OR</p>
                                            <div class="d-flex justify-content-evenly">
                                                <a class="login-btn mx-1 google" href="{{route('login.social' , 'google')}}"><i class="fab fa-google"></i> Login With Google</a>
                                                <a class="login-btn mx-1 facebook" href="{{route('login.social' , 'facebook')}}"><i class="fab fa-facebook"></i> Login With Facebook</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="{{route('register.post')}}" method="post">
                                                @csrf
                                                <input type="text" name="name" placeholder="Username" required>
                                                <input type="password" name="password" placeholder="Password" required>
                                                <input type="password" name="password_confirmation" placeholder="Password Confirm" required>
                                                <input name="email" placeholder="Email" type="email" required>
                                                <div class="button-box">
                                                    <button type="submit">Register</button>
                                                </div>
                                            </form>
                                            {{-- <li class="facebook"><a href="{{route('login.social' , 'facebook')}}"><i class="fa-brands fa-facebook-f"></i> Signup With Facebook</a></li> --}}
                                            <p class="social-title">OR</p>
                                            <div class="d-flex justify-content-evenly">
                                                <a class="login-btn mx-1 google" href="{{route('login.social' , 'google')}}"><i class="fab fa-google"></i> Signup With Google</a>
                                                <a class="login-btn mx-1 facebook" href="{{route('login.social' , 'facebook')}}"><i class="fab fa-facebook"></i> Signup With Facebook</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-area pt-160">
            <div class="footer-top pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Product</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="#">Coats</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Infant & Toddlers Clothing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Shipping & Return</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Socials</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Subscribe to get offer!</h3>
                                <div class="subscribe-wrap">
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Your email" name="EMAIL" value="">
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <p>We’ll never share your email address with a third-party.</p>
                                </div>
                                <div class="app-google-store">
                                    <a href="#"><img src="assets/images/icon-img/app-store.png" alt=""></a>
                                    <a href="#"><img src="assets/images/icon-img/google-play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom border-top-1">
                <div class="container">
                    <div class="copyright copyright-ptb text-center">
                        <p>Copyright © 2021 Dking - <a target="_blank" href="https://hasthemes.com/"> All Right Reserved</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@include('layouts.scripts')

</body>

</html>
