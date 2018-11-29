@extends('layouts.master')
@section('title', 'Cart')
@section('content')

    <div class="content">

    <div class="cart-wrapper">


        <h2>Cart</h2>



        <div class="cart-content">

            <img class="manul-head manul-head-flipped" src="{{ asset('resources/assets/img/favicon-v3.png') }}">
            <h3>Your Cart is empty</h3>
            <img class="manul-head" src="{{ asset('resources/assets/img/favicon-v3.png') }}">

        </div>

    </div>

    </div>

@endsection