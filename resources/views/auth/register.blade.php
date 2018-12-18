@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
