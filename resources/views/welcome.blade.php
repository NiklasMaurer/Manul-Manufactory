@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

    <div class="content">



    <img src="{{ asset('resources/assets/img/greeting-new.png') }}" alt="Welcome to Manul Manufactory" class="greeting">


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

        <iframe src="https://player.vimeo.com/video/315430801" width="640" height="362" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video"></iframe>

        {{--<img src="{{ asset('resources/assets/img/video-dummy.jpg') }}" alt="Video" class="video">--}}

    </div>

        {{--<button class="btn btn-add-to-cart"><a href="/editor">Let<span class="">'</span>s go</a></button>--}}

    </div>



@endsection



