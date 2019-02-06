@extends('layouts.master')
@section('title', 'Create Bodypart')

@section('content')

    <div class="content">
            

                <h2 class="auth-headline">Create New Bodypart</h2>


            <div class="btn-wrapper btn-wrapper-edit" role="group">
                <a href="{{ route('bodyparts.bodypart.index') }}" class="btn btn-backend" title="Show All Bodyparts">Show all
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>


        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('bodyparts.bodypart.store') }}" accept-charset="UTF-8" id="create_bodypart_form" name="create_bodypart_form" class="form-group">
            {{ csrf_field() }}
            @include ('bodyparts.form', [
                                        'bodypart' => null,
                                      ])

                <div class="form-group">

                        <input class="btn btn-update" type="submit" value="Add">
                </div>


            </form>

    </div>

@endsection


