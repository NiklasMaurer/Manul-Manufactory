@extends('layouts.master')
@section('title', 'Create Brick')

@section('content')

    <div class="content">

        {{--<div class="about-us-wrapper">--}}
            
            <span class="pull-left">
                <h2 class="auth-headline">Create New Brick</h2>
            </span>

            <div class="btn-wrapper btn-wrapper-edit" role="group">
                <a href="{{ route('bricks.brick.index') }}" class="btn btn-backend" title="Show All Bricks">Show all
                </a>
            </div>

        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('bricks.brick.store') }}" accept-charset="UTF-8" id="create_brick_form" name="create_brick_form" class="form-group" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('bricks.form', [
                                        'brick' => null,
                                      ])

                <div class="form-group">

                        <input class="btn btn-update" type="submit" value="Add">
                </div>

            </form>


    </div>

@endsection


