@extends('layouts.master')
@section('title', 'Checkout')
@section('content')

    <div class="content">

            <h2 class="auth-headline">Checkout</h2>

        @if(Session::has('success_message'))
            <div class="alert-success alert-success-user">

                {!! session('success_message') !!}

            </div>
        @endif

            <h3 class="profile-description">Your Shipping Adress:</h3>

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

            <form method="post" action="{{ route("content.checkoutPost") }}">
                @csrf
                <div class="cart-wrapper cart-wrapper-checkout">
                    @foreach($cart as $key => $item)
                    <div class="cart-item-wrap">

                        <div class="cart-item-list">
                            <h4>custom softtoy</h4>
                        <!--<div method="post" class="cart-del-wrapper">
                                <input type="hidden" name="del_key" value="{{ $key }}">
                                <button type="submit" class="cart-del" name="warenkorb_del" value="set">X</button>
                            </div>-->
                            <ul>

                                @foreach($item as $idx => $part)
                                    <li>{{ $idx . ' ' . $part['name'] }}</li>
                                @endforeach
                            </ul>

                            <h6 class="price">€25,-</h6>

                           {{--<label for="select">
                                <input type="number" class="quantity" name="quantity" min="1" value="1"
                                       placeholder="1">
                            </label>--}}

                        </div>

                    </div>
                    @endforeach

                </div>
                <button type="submit" class="btn btn-proceed-checkout" name="doCheckout">
                    {{ __('Proceed Checkout') }}
                </button>

            </form>
    </div>

@endsection