@extends('layouts.master')
@section('title', 'Sign in')
@section('content')

    <div class="content" xmlns="http://www.w3.org/1999/html">

<h2 class="auth-headline auth-headline-secundary">Sign Up</h2>

<form method="POST" action="{{ route('register') }}" class="form-group">
    @csrf

    <fieldset>

        <div class="form-wrapper">


            <div class="fields">

                <label for="name">{{ __('Name') }}<span class="required">*</span></label><br>
                <input id="name" type="text" class="form_input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="z.B.: Otocolobus" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif

            </div>


            <div class="fields">
                <label for="email">{{ __('Email') }}<span class="required">*</span></label><br>

                <input id="email" type="email" class="form_input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="z.B.: manul@email.at" required>

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
        {{ __('Register') }}
    </button>
</form>

{{--<form class="form-group" method="post" action="{{ route('register') }}">
    <fieldset>

        <div class="form-wrapper">


            <div class="fields">

                <label for="gender">Gender<span class="required">*</span></label><br><br>

                <label for="frau" class="radio">Female</label>
                <input type="radio" name="gender" value="frau" id="female">&nbsp;

                <label for="herr" class="radio">&nbsp;Male</label>
                <input type="radio" name="gender" value="herr" id="male">

            </div>

            <div class="fields">
                <label for="country">Country<span class="required">*</span></label><br><br>

                <select id="select" name="land">
                    <optgroup label="Antwortoptionen">

                        <option value="select">- please select -</option>
                        <option value="AT">Austria</option>
                        <option value="DE">Germany</option>
                        <option value="CHE">United Kingdom</option>

                    </optgroup>
                </select><br>

            </div>


            <div class="fields">
                <label for="firstname">Firstname<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Otocolobus" class="form_input" id="firstname" name="firstname" value=""><br>
            </div>

            <div class="fields">
                <label for="lastname">Lastname<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Manul" class="form_input" id="lastname" name="lastname" value=""><br>
            </div>



            <div class="fields">
                <label for="email">Email<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: manul@email.at" class="form_input" id="email" name="email" value=""><br>
            </div>

            <div class="fields">
                <label for="pw">Password<span class="required">*</span></label><br>

                <input type="password" placeholder="z.B.: Manul123" class="form_input" id="pw" name="pw" value=""><br>
            </div>



            <div class="fields">
                <label for="street">Street<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Manulstreet" class="form_input" id="street" name="email" value=""><br>
            </div>


            <div class="fields">
                <label for="number">Number<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: 14" class="form_input" id="number" name="number" value=""><br>
            </div>


            <div class="fields">
                <label for="zip">Zip<span class="required">*</span></label><br>

                <input type="number" placeholder="z.B.: 1030" class="form_input" id="zip" name="zip" max-length="6" value=""><br>
            </div>


            <div class="fields">
                <label for="city">City<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Manulcity" class="form_input" id="city" name="city" value=""><br>
            </div>


            <div class="fields">
                <label for="checkbox" class="checkbox">Accept <a class="link" href="../content/agb.php">Conditions</a><span class="required">*</span></label>
                <input type="checkbox" value="agb" id="agb_form" name="agb_form"><br>
            </div>




        </div>

    </fieldset>


    <button type="submit" class="btn">Sign Up</button>

</form>--}}

</div>


@endsection

{{--


<form class="form-group" method="post" action="{{ route('register') }}">
    <fieldset>

        <div class="form-wrapper">


            <div class="fields">

                <label for="gender">Gender<span class="required">*</span></label><br><br>

                <label for="frau" class="radio">Female</label>
                <input type="radio" name="gender" value="frau" id="female">&nbsp;

                <label for="herr" class="radio">&nbsp;Male</label>
                <input type="radio" name="gender" value="herr" id="male">

            </div>

            <div class="fields">
                <label for="country">Country<span class="required">*</span></label><br><br>

                <select id="select" name="land">
                    <optgroup label="Antwortoptionen">

                        <option value="select">- please select -</option>
                        <option value="AT">Austria</option>
                        <option value="DE">Germany</option>
                        <option value="CHE">United Kingdom</option>

                    </optgroup>
                </select><br>

            </div>


            <div class="fields">
                <label for="firstname">Firstname<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Otocolobus" class="form_input" id="firstname" name="firstname" value=""><br>
            </div>

            <div class="fields">
                <label for="lastname">Lastname<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Manul" class="form_input" id="lastname" name="lastname" value=""><br>
            </div>



            <div class="fields">
                <label for="email">Email<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: manul@email.at" class="form_input" id="email" name="email" value=""><br>
            </div>

            <div class="fields">
                <label for="pw">Password<span class="required">*</span></label><br>

                <input type="password" placeholder="z.B.: Manul123" class="form_input" id="pw" name="pw" value=""><br>
            </div>



            <div class="fields">
                <label for="street">Street<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Manulstreet" class="form_input" id="street" name="email" value=""><br>
            </div>


            <div class="fields">
                <label for="number">Number<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: 14" class="form_input" id="number" name="number" value=""><br>
            </div>


            <div class="fields">
                <label for="zip">Zip<span class="required">*</span></label><br>

                <input type="number" placeholder="z.B.: 1030" class="form_input" id="zip" name="zip" max-length="6" value=""><br>
            </div>


            <div class="fields">
                <label for="city">City<span class="required">*</span></label><br>

                <input type="text" placeholder="z.B.: Manulcity" class="form_input" id="city" name="city" value=""><br>
            </div>


            <div class="fields">
                <label for="checkbox" class="checkbox">Accept <a class="link" href="../content/agb.php">Conditions</a><span class="required">*</span></label>
                <input type="checkbox" value="agb" id="agb_form" name="agb_form"><br>
            </div>




        </div>

    </fieldset>


    <button type="submit" class="btn">Sign Up</button>
</form>
--}}
