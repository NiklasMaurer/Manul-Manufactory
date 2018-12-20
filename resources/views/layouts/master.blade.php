<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Manul Manufactory</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset('resources/assets/css/stylesheet.css') }}">
    {{--<link rel="stylesheet" href="css/app.css">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('resources/assets/img/favicon-v3.png') }}">
</head>
<body>
<header>

    <nav>
        <div class="nav-wrapper">
            <a class="" href="/">
                <img class="icons nav-icon" src="{{ asset('resources/assets/img/home-icon-white.png') }}" alt="home-symbol">
            </a>


            <div class="drop-down-wrapper">
                <a href="/editor">
                    <img class="logo" src="{{ asset('resources/assets/img/logo.png') }}" alt="Logo">
                    <div class="circle"> </div>
                </a>
                <div class="start">

                    <ul class="start_nav">

                        <li class=""><a href="/editor">Editor</a></li>
                        @if(Auth::check())
                            <li>
                                {{--<a href="{{ route('logout') }}" class="btn session-btn">Logout {{ Auth::user()->name }}</a>--}}
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endif

                        @if(!Auth::check())
                           {{-- <a href="{{ 'login' }}" class="btn session-btn">Login</a>
                            <a href="" class="btn session-btn">Register</a>--}}
                            {{--<li class=""><a href="/sign-in">Log In</a></li><span class="backslash">/</span> Sign Up</a></li>--}}
                            <li><a href="{{ 'login' }}">Log In</a><span class="backslash">|</span><a href="{{ 'register' }}" id="sign-in">Sign Up</a></li>

                        @endif

                        <li class=""><a href="/about-us">About Us</a></li>
                        <li class=""><a href="/cart">Cart</a></li>

                    </ul>

                </div>
            </div>


            <!-- <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div> -->
            <img class="icons nav-icon menu-icon" src="{{ asset('resources/assets/img/menu-icon-white-v4.png') }}"
                 alt="menu-icon">
        </div>
    </nav>

</header>





@yield('content')




{{--@include('partials.footer')--}}


<footer>
    <div class="footer-wrapper">
    <p>
        <a href="/conditions">Conditions</a><a href="/imprint">Imprint</a><a href="/customer-service">Customer
            Service</a>
        <a href="https://www.facebook.com/"><img class="social-media-logo"
                                                 src="{{ asset('resources/assets/img/facebook-logo.png') }}"
                                                 alt="facebook-logo"></a>
        <a href="https://www.instagram.com/"><img class="social-media-logo"
                                                  src="{{ asset('resources/assets/img/instagram-logo.png') }}"
                                                  alt="instagram-logo"></a>
    </p>
    </div>
    <p class="copyright"><span>&copy; &nbsp;</span> 2018 Manul Manufactory</p>

</footer>

</body>
<script>window.asset = {!! json_encode(['path' => asset('resources')]) !!}</script>
<script src="{{ asset('resources/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('resources/assets/js/user-experience.js') }}"></script>
<script src="{{ asset('resources/assets/js/three.js') }}"></script>
<script src="{{ asset('resources/assets/js/GLTFLoader.js') }}"></script>
<script src="{{ asset('resources/assets/js/editor.js') }}"></script>

</html>