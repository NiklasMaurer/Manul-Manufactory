@extends('layouts.master')
@section('title', 'Edit Bodypart')

@section('content')

    <div class="content">

                <h2 class="auth-headline">{{ !empty($bodypart->name) ? $bodypart->name : 'Bodypart' }}</h2>

            <div class="btn-wrapper btn-wrapper-edit" role="group">

                <a href="{{ route('bodyparts.bodypart.index') }}" class="btn btn-backend" title="Show All Bodyparts">
                    Show all
                </a>

                <a href="{{ route('bodyparts.bodypart.create') }}" class="btn btn-backend" title="Create New Bodypart">
                    Create new
                </a>

            </div>


            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('bodyparts.bodypart.update', $bodypart->id) }}" id="edit_bodypart_form" name="edit_bodypart_form" accept-charset="UTF-8" class="form-group">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('bodyparts.form', [
                                        'bodypart' => $bodypart,
                                      ])

                <div class="form-group">

                        <input class="btn btn-update" type="submit" value="Update">

                </div>
            </form>

        </div>

@endsection