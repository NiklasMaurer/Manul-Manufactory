@extends('layouts.master')
@section('title', 'User')
@section('content')

    <div class="content">

       {{-- <div class="about-us-wrapper">--}}

            <h2 class="auth-headline">Hello {{ $users -> name }}</h2>

            @if(Session::has('success_message'))
                <div class="alert-success alert-success-user">

                    {!! session('success_message') !!}

                </div>
            @endif

            {{--<p>{{ $myOrders->id }}</p>--}}

           {{-- @if($myOrders == 0)
                <div class="alert-success">

                    <p>hi</p>

                </div>
            @endif--}}
            <h3 class="profile-description">Change your personal information right here:</h3>

            {{--route('users.update', $user)--}}



             <form method="POST" action="{{ route('users.update') }}" class="form-group">

                 {{ csrf_field() }}
                 {{ method_field('patch') }}

                 <fieldset>

                     <div class="form-wrapper">


                         <div class="fields">

                             <label for="name">{{ __('Name') }}<span class="required">*</span></label><br>
                             <input id="name" type="text" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $users -> name }}" placeholder="e.g. Otocolobus" required autofocus>

                             @if ($errors->has('name'))
                                 <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                             @endif

                         </div>


                         <div class="fields">
                             <label for="email">{{ __('Email') }}<span class="required">*</span></label><br>

                             <input id="email" type="email" class="form_input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $users -> email }}" placeholder="e.g. manul@email.at" required>

                             @if ($errors->has('email'))
                                 <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                             @endif
                         </div>


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



                         <div class="fields">
                             <label for="password">{{ __('Password') }}<span class="required">*</span></label>

                             <input id="password" type="password" class="form_input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="e.g. manul123" required>

                             @if ($errors->has('password'))
                                 <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                             @endif
                         </div>

                         <div class="fields">
                             <label for="password-confirm">{{ __('Confirm Password') }}<span class="required">*</span></label>

                             <input id="password-confirm" type="password" class="form_input" name="password_confirmation" placeholder="e.g. manul123" required>
                         </div>

                     </div>

                 </fieldset>

                 <button type="submit" class="btn" name="submit-update">
                     {{ __('Save') }}
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
       {{-- </div>--}}

    </div>

@endsection