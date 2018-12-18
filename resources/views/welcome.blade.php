@extends('layouts.master')

@section('title', 'Welcome')

@section('content')

    <div class="content">



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



