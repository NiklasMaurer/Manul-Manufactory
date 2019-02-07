@extends('layouts.master')
@section('title', 'Show Brick')

@section('content')

<div class="content">
    <div class="panel-heading clearfix">

            <h2 class="auth-headline">{{ isset($brick->name) ? $brick->name : 'Brick' }}</h2>

            <form method="POST" action="{!! route('bricks.brick.destroy', $brick->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-wrapper btn-wrapper-show" role="group">
                    <a href="{{ route('bricks.brick.index') }}" class="btn btn-backend" title="Show All Bricks">Show all
                    </a>

                    <a href="{{ route('bricks.brick.create') }}" class="btn btn-backend" title="Create New Brick">Create
                    </a>
                    
                    <a href="{{ route('bricks.brick.edit', $brick->id ) }}" class="btn btn-backend" title="Edit Brick">Edit
                    </a>

                    <button type="submit" class="btn btn-backend btn-danger" title="Delete Brick" onclick="return confirm(&quot;Delete Brick??&quot;)">Delete
                    </button>
                </div>
            </form>

    </div>

    <div class="about-us-wrapper">
        <dl class="dl-horizontal">
            <dt>Bodyparts</dt>
            <dd>{{ optional($brick->bodypart)->name }}</dd>
            <dt>File</dt>
            <dd>{{ asset('storage/' . $brick->file) }}</dd>
            <dt>Name</dt>
            <dd>{{ $brick->name }}</dd>
            <dt>Created At</dt>
            <dd>{{ $brick->created_at }}</dd>
            <dt>Created By</dt>
            <dd>{{ optional($brick->creator)->name }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $brick->updated_at }}</dd>
            <dt>Updated By</dt>
            <dd>{{ optional($brick->updater)->name }}</dd>

        </dl>

    </div>
</div>

@endsection