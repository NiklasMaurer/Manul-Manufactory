@extends('layouts.master')
@section('title', 'Edit Brick')

@section('content')

    <div class="content">

                <h2 class="auth-headline">{{ !empty($brick->name) ? $brick->name : 'Brick' }}</h2>

            <div class="btn-wrapper btn-wrapper-edit" role="group">

                <a href="{{ route('bricks.brick.index') }}" class="btn btn-backend" title="Show All Bricks">Show all
                </a>

                <a href="{{ route('bricks.brick.create') }}" class="btn btn-backend" title="Create New Brick">Create new
                </a>

            </div>


            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('bricks.brick.update', $brick->id) }}" id="edit_brick_form" name="edit_brick_form" accept-charset="UTF-8" class="form-group" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('bricks.form', [
                                        'brick' => $brick,
                                      ])
                <div class="form-group">

                        <input class="btn btn-update" type="submit" value="Update">

                </div>
            </form>

    </div>

@endsection