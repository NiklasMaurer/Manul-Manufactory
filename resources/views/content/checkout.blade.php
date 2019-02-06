@extends('layouts.master')
@section('title', 'Checkout')
@section('content')

    <div class="content">

        {{--<div class="about-us-wrapper">--}}

            <h2 class="auth-headline">Checkout</h2>

        @if(Session::has('success_message'))
            <div class="alert-success alert-success-user">

                {!! session('success_message') !!}

                {{--<button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>--}}

            </div>
        @endif

            <h3 class="profile-description">Your Shipping Adress:</h3>

            {{--route('users.update', $user)--}}

            <form method="POST" action="{{ route('content.updateAdress') }}" class="form-group">

                {{ csrf_field() }}
                {{ method_field('patch') }}

                <fieldset>

                    <div class="form-wrapper">


                        <div class="fields">

                            <label for="street">{{ __('Street') }}<span class="required">*</span></label><br>
                            <input id="street" type="text" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="street" value="{{ $users -> street }}" placeholder="e.g. Manulstreet" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                            @endif

                        </div>



                        <div class="fields">

                            <label for="number">{{ __('Number') }}<span class="required">*</span></label><br>
                            <input id="number" type="number" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="number" value="{{ $users -> number  }}" placeholder="e.g. 14" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                            @endif

                        </div>



                        <div class="fields">

                            <label for="zip">{{ __('Zip') }}<span class="required">*</span></label><br>
                            <input id="zip" type="number" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="zip" value="{{ $users -> zip }}" placeholder="e.g. 5204" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                            @endif

                        </div>


                        <div class="fields">

                            <label for="city">{{ __('City') }}<span class="required">*</span></label><br>
                            <input id="city" type="text" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="city" value="{{ $users -> city }}" placeholder="e.g. Otocolocity" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                            @endif

                        </div>


                        <div class="fields">

                            <label for="country">{{ __('Country') }}<span class="required">*</span></label><br>
                            <input id="country" type="text" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="country" value="{{ $users -> country }}" placeholder="e.g. Austria" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                            @endif

                        </div>

                    </div>

                </fieldset>

                <button type="submit" class="btn" name="submit-update">
                    {{ __('Save') }}
                </button>
            </form>

            <form method="post" {{--class="form-group"--}}>

                <div class="cart-wrapper cart-wrapper-checkout">

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


                            {{-- <div class="cart-item">

                                 <a href="" class="cart-del">X</a>

                                 <img class="cart-item-img" src="{{ asset('resources/assets/img/cart-item.jpg') }}"
                                      alt="cart-item">
                             </div>

                             <h6 class="price">€25,-</h6>

                             <label for="select">
                                 <input type="number" class="quantity" name="quantity" min="1" value="1"
                                        placeholder="1">
                             </label>--}}


                        </div>

                    </div>


                    <div class="cart-item-wrap">

                        {{--<a href="" class="cart-del">X</a>--}}

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


                        {{-- <div class="cart-item">

                             <a href="" class="cart-del">X</a>

                             <img class="cart-item-img" src="{{ asset('resources/assets/img/cart-item.jpg') }}"
                                  alt="cart-item">
                         </div>

                         <h6 class="price">€25,-</h6>

                         <label for="select">
                             <input type="number" class="quantity" name="quantity" min="1" value="1"
                                    placeholder="1">
                         </label>--}}


                    </div>

                </div>

                <button type="submit" class="btn btn-proceed-checkout" name="doCheckout">
                    {{ __('Proceed Checkout') }}
                </button>

            </form>

            {{--<form method="POST" action="{{ route('register') }}" class="form-group">
                @csrf

                <fieldset>

                    <div class="form-wrapper">


                        <div class="fields">

                            <label for="name">{{ __('Name') }}<span class="required">*</span></label><br>
                            <input id="name" type="text" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" placeholder="z.B.: Otocolobus" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div>


                        <div class="fields">
                            <label for="email">{{ __('Email') }}<span class="required">*</span></label><br>

                            <input id="email" type="email" class="form_input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" placeholder="z.B.: manul@email.at" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>

                </fieldset>

                <button type="submit" class="btn" name="submit-register">
                    {{ __('Register') }}
                </button>
            </form>
--}}

            {{--<a class="btn" href="{{ route('users.edit', $user) }}">edit information</a>--}}




            {{--</div>--}}

    </div>

@endsection