@extends('layouts.master')
@section('title', 'Editor')
@section('content')
    {{--{{dd($bricks)}}--}}


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
                {{--<li><a href="#" id="bodypart-eyes">eyes</a></li>
                <li><a href="#" id="bodypart-nose">nose</a></li>
                <li><a href="#" id="bodypart-mouth">mouth</a></li>
                <li><a href="#" id="bodypart-tail">tail</a></li>
                <li><a href="#" id="bodypart-shoes">shoes</a></li>--}}
                @endforeach
            </ul>

        </div>


        <div class="wrapper wrapper-type">

            <h3 class="headline-select">Type:</h3>

            <ul class="editor type-editor">

                @foreach($bricks as $key => $brick)


                    <li data-content="{{ $brick->bodyparts_id }}" id="{{ $brick->bodyparts_id }}-{{ $brick->name }}" data-brick_id="{{ $brick->id }}" class="bodypart-id-{{ $brick->bodyparts_id }}"><img class="type-selector" src="{{ asset('storage/'.$brick->file) }}"> {{--src="{{ asset('resources/assets/img/1-standard.png') }}--}}{{ $brick->name }}</li>


                {{--asset('resources/assets/img/'.$brick->file) }}--}}
{{--
                    <li class="bodypart-id-{{ $brick->bodyparts_id }}"><a href="#" id="{{ $brick->bodyparts_id }}-{{ $brick->name }}" data-content="{{ $brick->bodyparts_id }}"><img class="type-selector" src="{{ asset('resources/assets/img/1-standard.png') }}">{{ $brick->name }}</a></li>--}}
                @endforeach

                {{--<li class="ears"><a href="#" id="ears-standard"><img class="type-selector" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li class="ears"><a href="#" id="ears-bunny"><img class="type-selector" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Bunny</a></li>


                <li class="eyes"><a href="#" id="eyes-standard"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li class="eyes"><a href="#" id="eyes-frog"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Frog</a></li>



                <li class="nose"><a href="#" id="nose-standard"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li class="nose"><a href="#" id="nose-clown"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Unicorn</a></li>



                <li class="mouth"><a href="#" id="mouth-standard"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li class="mouth"><a href="#" id="mouth-tongue"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Tongue</a></li>



                <li class="tail"><a href="#" id="tail-standard"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li class="tail"><a href="#" id="tail-dragon"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Dragon</a></li>



                <li class="shoes"><a href="#" id="shoes-standard"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-standard-rechteck.png') }}">Standard</a></li>
                <li class="shoes"><a href="#" id="shoes-converse"><img class="type-selector eyes" src="{{ asset('resources/assets/img/ears-bunny-rechteck.png') }}">Converse</a></li>--}}

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
        <form class="" method="POST" id="cart-form" action="{{ route("editor.post") }}">
            @csrf
            <button class="btn btn-add-to-cart" type="submit" name="cart">Add To Cart</button>
            <input type="hidden" value="" name="cart" id="cart_res">
        </form>

        <button class="btn btn-add-to-wishlist" id="animate" {{--type="submit"--}} name="animate">start to dance</button>

        </div>

    </div>


    <script>window.asset = {!! json_encode(['path' => asset('resources')]) !!}</script>
    <script src="{{ asset('resources/assets/js/three.js') }}"></script>
    <script src="{{ asset('resources/assets/js/GLTFLoader.js') }}"></script>
    {{--<script src="{{ asset('resources/assets/js/MaterialLoader.js') }}"></script>--}}
    <script src="{{ asset('resources/assets/js/editor.js') }}"></script>

@endsection