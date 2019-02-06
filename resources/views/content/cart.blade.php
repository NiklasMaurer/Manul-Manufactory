@extends('layouts.master')
@section('title', 'Cart')
@section('content')


    <div class="content">


        <h2 class="auth-headline">Cart</h2>

        @if(count($cart) <= 0)


        <div class="cart-wrapper cart-wrapper-empty">

            <img class="manul-head manul-head-flipped" src="{{ asset('resources/assets/img/favicon-v3.png') }}">
            <h3>Your Cart is empty</h3>
            <img class="manul-head" src="{{ asset('resources/assets/img/favicon-v3.png') }}">

        </div>

        <a class="btn btn-checkout btn-cart-editor" href="/editor" name="cart">Go to Editor</a>


        @else


                    <div class="cart-wrapper">

                        @foreach($cart as $item)
                        <div class="cart-item-wrap">

                            <div class="cart-item-list">
                                <form method="post" class="cart-del-wrapper"><input type="hidden" name="key" value="<?/*= $key */ ?>">

                                    <button type="submit" class="cart-del" name="warenkorb_del">X</button>

                                </form>
                                <ul>
                                    @foreach($item as $idx => $part)
                                        <li>{{ $idx . ' ' . $part['name'] }}</li>
                                    @endforeach

                                </ul>

                                <h6 class="price">€25,-</h6>

                                <label for="select">
                                    <input type="number" class="quantity" name="quantity" min="1" value="1"
                                           placeholder="1">
                                </label>

                            </div>

                        </div>
                        @endforeach

                    </div>

            <a href="/checkout" class="btn btn-checkout" type="submit" name="cart">Go to Checkout</a>

            @endif
    </div>


@endsection