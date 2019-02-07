@extends('layouts.master')
@section('title', 'Show Bodypart')

@section('content')

    <div class="content">
    <div class="panel-heading clearfix">


            <h2 class="auth-headline">{{ isset($bodypart->name) ? $bodypart->name : 'Bodypart' }}</h2>


        <div class="pull-right">

            <form method="POST" action="{!! route('bodyparts.bodypart.destroy', $bodypart->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-wrapper btn-wrapper-show" role="group">
                    <a href="{{ route('bodyparts.bodypart.index') }}" class="btn btn-backend" title="Show All Bodypart">Show all
                    </a>

                    <a href="{{ route('bodyparts.bodypart.create') }}" class="btn btn-backend" title="Create New Bodypart">Create
                    </a>
                    
                    <a href="{{ route('bodyparts.bodypart.edit', $bodypart->id ) }}" class="btn btn-backend" title="Edit Bodypart">Edit
                    </a>

                    <button type="submit" class="btn btn-backend btn-danger" title="Delete Bodypart" onclick="return confirm(&quot;Delete Bodypart??&quot;)">Delete

                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="about-us-wrapper">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $bodypart->name }}</dd>
            <dt>Created At</dt>
            <dd>{{ $bodypart->created_at }}</dd>
            <dt>Created By</dt>
            <dd>{{ optional($bodypart->creator)->name }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $bodypart->updated_at }}</dd>
            <dt>Updated By</dt>
            <dd>{{ optional($bodypart->updater)->name }}</dd>

        </dl>

    </div>
</div>

@endsection