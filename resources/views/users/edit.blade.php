{{--
@extends('layouts.master')
@section('title', 'User')
@section('content')

    <div class="content">

        <div class="about-us-wrapper">

            <h2>Hello {{ Auth::user()->name }}</h2>

            <form method="post" action="{{ route('users.update', $user) }}">--}}
{{--{{ route('register') }}--}}{{--

                {{ csrf_field() }}
                {{ method_field('patch') }}

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


                        <div class="fields">
                            <label for="password">{{ __('Password') }}<span class="required">*</span></label>

                            <input id="password" type="password" class="form_input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="z.B.: manul123" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="fields">
                            <label for="password-confirm">{{ __('Confirm Password') }}<span class="required">*</span></label>

                            <input id="password-confirm" type="password" class="form_input" name="password_confirmation" placeholder="z.B.: manul123" required>
                        </div>

                    </div>

                </fieldset>

                <button type="submit" class="btn" name="submit-register">
                    {{ __('Save') }}
                </button>
            </form>

        </div>

    </div>

@endsection--}}
