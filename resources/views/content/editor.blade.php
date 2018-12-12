@extends('layouts.master')
@section('title', 'Editor')
@section('content')


    <div class="content-editor">

        <div class="editor-wrapper">

            <div class="editor-menu-wrapper">

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
                <li><a href="#"><img class="type-selector" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li><a href="#"><img class="type-selector" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Bunny</a></li>
            </ul>

        </div>

                </div>

        <!-- <div class="manul-wrapper"> -->

        {{--<img src="{{ asset('resources/assets/img/cat-v9.png') }}" alt="manul" class="manul-3d">--}}
        <div class="wrapper-canvas">
        <canvas id="myCanvas"></canvas>
        </div>

        </div>

        <!-- </div> -->


        <div class="btn-wrapper">

            <button class="btn btn-add-to-cart" type="submit" name="cart">Add To Cart</button>
            <button class="btn btn-add-to-wishlist" type="submit" name="cart">Add To Wishlist</button>


        </div>

    </div>

@endsection