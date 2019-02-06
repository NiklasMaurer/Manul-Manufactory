@extends('layouts.master')
@section('title', 'Customer Service')
@section('content')

    <div class="content">

    <div class="about-us-wrapper">


        <h2>Customer Service</h2>

        {{--<h3>Welcome to our customer service help center</h3>--}}

        <p class="textblock">
            Welcome to our customer service help center.
            If you have any questions, please have a look at our FAQs or just write us an email.
        </p>
        <p class="textblock">
            <span>E-Mail:&nbsp;<a class="link" href="#">niklasxv.maurer@gmail.com</a></span>
        </p>

        <h2>FAQs</h2>
        <h3 class="subheadline">
            How can I create my personal Manul?
        </h3>

        <p class="textblock">
            To enter our editor, You have to click on the logo above or <a class="link" href="/editor">right here</a>. When you opened our editor, simply select the region (menu on the left), where you want your Manul to have a different type of bodypart. Then select your prefered type on the right side.
        </p>

        <h3 class="subheadline">
            Where can I change my personal information?
        </h3>

        <p class="textblock">
            You have to be logged in to edit your personal information. <a class="link" href="{{ 'login' }}">Login now</a>. If you are logged in, you will find a green <a class="link" href="/user">profile</a> button in the dropdown menu. Simply click it an edit the form as you wish.
        </p>

        <h3 class="subheadline">
            Can I get discounts?
        </h3>

        <p class="textblock">
            There will we be some discounts on special occations like Easter, Christmas or Valentine's Day. But so far, we can't just give you a discount at any time.
        </p>

    </div>

    </div>

@endsection