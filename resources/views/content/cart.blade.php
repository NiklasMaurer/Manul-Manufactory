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










        {{--@foreach($cart as $key => $items)
            <ul><li>{{$items}}</li></ul>
        @endforeach--}}


        {{-- <div class="cart-wrapper">

         <div class="cart-item-wrap">

             <div class="cart-item-list">
                 <form method="post" class="cart-del-wrapper"><input type="hidden" name="key" value="<?/*= $key */ ?>">

                     <button type="submit" class="cart-del" name="warenkorb_del">X</button>

                 </form>
                 <ul>
                 <li>standard ears</li>
                 <li>glasses eyes</li>
                 <li>elephant nose</li>
                 <li>vampire mouth</li>
                 <li>dragon tail</li>
                 <li>special shoes</li>
             </ul>

             <h6 class="price">€25,-</h6>

             <label for="select">
                 <input type="number" class="quantity" name="quantity" min="1" value="1"
                        placeholder="1">
             </label>


            --}}{{-- <div class="cart-item">

                 <a href="" class="cart-del">X</a>

                 <img class="cart-item-img" src="{{ asset('resources/assets/img/cart-item.jpg') }}"
                      alt="cart-item">
             </div>

             <h6 class="price">€25,-</h6>

             <label for="select">
                 <input type="number" class="quantity" name="quantity" min="1" value="1"
                        placeholder="1">
             </label>--}}{{--


         </div>

         </div>


             <div class="cart-item-wrap">

                 --}}{{--<a href="" class="cart-del">X</a>--}}{{--

                 <div class="cart-item-list">
                     <form method="post" class="cart-del-wrapper"><input type="hidden" name="key" value="<?/*= $key */ ?>">

                         <button type="submit" class="cart-del" name="warenkorb_del">X</button>

                     </form>
                 <ul>
                     <li>standard ears</li>
                     <li>glasses eyes</li>
                     <li>elephant nose</li>
                     <li>vampire mouth</li>
                     <li>dragon tail</li>
                     <li>special shoes</li>
                 </ul>

                 </div>

                 <h6 class="price">€25,-</h6>

                 <label for="select">
                     <input type="number" class="quantity" name="quantity" min="1" value="1"
                            placeholder="1">
                 </label>


                 --}}{{-- <div class="cart-item">

                      <a href="" class="cart-del">X</a>

                      <img class="cart-item-img" src="{{ asset('resources/assets/img/cart-item.jpg') }}"
                           alt="cart-item">
                  </div>

                  <h6 class="price">€25,-</h6>

                  <label for="select">
                      <input type="number" class="quantity" name="quantity" min="1" value="1"
                             placeholder="1">
                  </label>--}}{{--


             </div>

         </div>--}}



        {{--</div>--}}


        {{-- </div>--}}

        {{--<button class="btn btn-checkout" type="submit" name="cart">Go to Checkout</button>--}}

    </div>


@endsection