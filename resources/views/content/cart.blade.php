@extends('layouts.master')
@section('title', 'Cart')
@section('content')
    <?php $cart = Session::get('cart'); ?>


    <div class="content">


        {{--@if($cart)

            @for ($i = 1; $i<= count($cart); $i++)

                {{$i . $cart[$i]['name']}}


            @endfor

        @endif--}}

        {{--<div class="cart-wrapper">--}}


        <h2 class="auth-headline">Cart</h2>


        {{--<div class="cart-content">--}}

        @if(!$cart)

        <div class="cart-wrapper cart-wrapper-empty">

            <img class="manul-head manul-head-flipped" src="{{ asset('resources/assets/img/favicon-v3.png') }}">
            <h3>Your Cart is empty</h3>
            <img class="manul-head" src="{{ asset('resources/assets/img/favicon-v3.png') }}">

        </div>

        <a class="btn btn-checkout btn-cart-editor" href="/editor" name="cart">Go to Editor</a>

        @endif


        @if($cart)



                    <div class="cart-wrapper">

                        <div class="cart-item-wrap">

                            <div class="cart-item-list">
                                <form method="post" class="cart-del-wrapper"><input type="hidden" name="key" value="<?/*= $key */ ?>">

                                    <button type="submit" class="cart-del" name="warenkorb_del">X</button>

                                </form>
                                <ul>
                                    @if($cart)

                                        @for ($i = 1; $i<= count($cart); $i++)
                                    <li>{{$i . $cart[$i]['name']}}</li>
                                        @endfor

                                    @endif
                                </ul>

                                <h6 class="price">€25,-</h6>

                                <label for="select">
                                    <input type="number" class="quantity" name="quantity" min="1" value="1"
                                           placeholder="1">
                                </label>

                            </div>

                        </div>

                    </div>

            <button class="btn btn-checkout" type="submit" name="cart">Go to Checkout</button>

        @endif










    </div>


@endsection