@extends('layouts.master')

@section('content')

    <div class="content">

{{--    <div class="session-wrapper">


    @if(Auth::check())
        <h3>Logged in as {{ Auth::user()->name }}</h3>
            --}}{{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}{{--
                <a class="btn session-btn" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            --}}{{--</div>--}}{{--
    @endif

        @guest

    @if(!Auth::check())
        <a href="{{ 'login' }}" class="btn session-btn">Login</a>
        <a href="{{ route('register') }}" class="btn session-btn">Register</a>
    @endif

        @endguest

    </div>--}}

        <img src="{{ asset('resources/assets/img/greeting.png') }}" alt="Welcome to Manul Manufactory" class="greeting">


        <div class="bubbles">

            <div class="bubble bubble-one">

                <p>Our little editor lets
                    you easily create your
                    custom softtoy</p>

            </div>

            <div class="bubble bubble-two">

                <p>Simply click on the
                    logo above to<br>
                    get startet</p>

            </div>

        </div>

        <div class="video-wrapper">

            <h3>The following video shows you how to use our editor</h3>

            <img src="{{ asset('resources/assets/img/video-dummy.jpg') }}" alt="Video" class="video">

        </div>

    </div>

@endsection
