@extends('layouts.master')
@section('title', 'Editor')
@section('content')

    <script>
        var bricks = {!! json_encode($bricks, JSON_HEX_TAG) !!};
        var bodyparts = {!! json_encode($bodyparts, JSON_HEX_TAG) !!};
    </script>



    <div class="content-editor">

        <div class="editor-wrapper">

            <div class="editor-menu-wrapper">

        <div class="wrapper">

            <h3 class="headline-select">Region:</h3>

            <ul class="editor">

                @foreach($bodyparts as $bodypart)
                <li><a href="#" id="bodypart-{{ $bodypart->name }}">{{  $bodypart->name }}</a></li>
                @endforeach
            </ul>

        </div>


        <div class="wrapper wrapper-type">

            <h3 class="headline-select">Type:</h3>

            <ul class="editor type-editor">

                @foreach($bricks as $key => $brick)
                    <li data-content="{{ $brick->bodyparts_id }}" id="{{ $brick->bodyparts_id }}-{{ $brick->name }}" data-brick_id="{{ $brick->id }}" class="bodypart-id-{{ $brick->bodyparts_id }}"><img class="type-selector" src="{{ asset('resources/assets/img/'.$brick->file) }}">{{ $brick->name }}</li>
                @endforeach

            </ul>

        </div>

                </div>

        <div class="wrapper-canvas">
        <canvas id="myCanvas"></canvas>
        </div>

        </div>

        <div class="btn-wrapper">
        <form class="" method="POST" id="cart-form" action="{{ route("editor.post") }}">
            @csrf
            <button class="btn btn-add-to-cart" type="submit" name="cart">Add To Cart</button>
            <input type="hidden" value="" name="cart" id="cart_res">
        </form>

        <button class="btn btn-add-to-wishlist" id="animate" name="animate">start to dance</button>

        </div>

    </div>

    <script>window.asset = {!! json_encode(['path' => asset('resources')]) !!}</script>
    <script src="{{ asset('resources/assets/js/three.js') }}"></script>
    <script src="{{ asset('resources/assets/js/GLTFLoader.js') }}"></script>
    <script src="{{ asset('resources/assets/js/editor.js') }}"></script>

@endsection