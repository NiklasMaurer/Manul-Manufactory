@extends('layouts.master')
@section('title', 'Sign in')
@section('content')

    <div class="content">

    <h2 class="auth-headline">Log In</h2>

    <form class="form-group" method="post" action="#">
        <fieldset>

            <div class="form-wrapper">



                <div class="fields">
                    <label for="email">Email</label><br>

                    <input type="text" placeholder="z.B.: max@max.at" class="form_input" name="email" value=""><br>
                </div>

                <div class="fields">
                    <label for="pw">Password</label><br>

                    <input type="password" placeholder="z.B.: max123" class="form_input" name="pw" value=""><br>
                </div>

            </div>

        </fieldset>


        <button type="submit" class="btn">Log In</button>

    </form>


    <!-- </div> -->


    <h2 class="auth-headline auth-headline-secundary">Sign Up</h2>

    <form class="form-group" method="post" action="#">
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

    </div>


@endsection