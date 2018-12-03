@extends('layouts.master')
@section('title', 'Editor')
@section('content')


    <div class="content-editor">

        <div class="wrapper">

            <h3 class="headline-select">Region:</h3>

            <ul class="editor">
                <li><a href="#">ears</a></li>
                <li><a href="#">eyes</a></li>
                <li><a href="#">nose</a></li>
                <li><a href="#">mouth</a></li>
                <li><a href="#">tail</a></li>
                <li><a href="#">shoes</a></li>
            </ul>

        </div>


        <div class="wrapper wrapper-type">

            <h3 class="headline-select">Type:</h3>

            <ul class="editor type-editor">
                <li><div class="ears-standard"></div>Standard</li>
                <li><div class="ears-bunny"></div><div class="ears-bunny"></div>Bunny</li>
            </ul>

        </div>

        <!-- <div class="manul-wrapper"> -->

        {{--<img src="{{ asset('resources/assets/img/cat-v9.png') }}" alt="manul" class="manul-3d">--}}

        <canvas id="myCanvas"></canvas>

        <!-- </div> -->


        <div class="btn-wrapper">

            <button class="btn btn-add-to-wishlist" type="submit" name="cart">Add To Wishlist</button>
            <button class="btn btn-add-to-cart" type="submit" name="cart">Add To Cart</button>

        </div>

    </div>

@endsection