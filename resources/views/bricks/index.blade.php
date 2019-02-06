@extends('layouts.master')
@section('title', 'Bricks')

@section('content')

    <div class="content">

    <div class="about-us-wrapper">



                <h2>Bricks</h2>

        @if(Session::has('success_message'))
            <div class="alert-success">

                {!! session('success_message') !!}

                {{--<button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>--}}

            </div>
        @endif


            <div class="btn-wrapper btn-wrapper-backend" role="group">
                <a href="{{ route('bricks.brick.create') }}" class="btn btn-backend" title="Create New Brick">
                    <span aria-hidden="true">Create</span>
                </a>

            </div>
        
        @if(count($bricks) == 0)

                <h3>No Bricks Available!</h3>

        @else

                <table>
                    <thead>
                        <tr>
                            <th>Bodyparts</th>

                            <th class="th-brick-name">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bricks as $brick)
                        <tr>
                            <td>{{ optional($brick->bodypart)->name }}</td>
                            <td class="td-brick-name">{{ $brick->name }}</td>

                            <td>

                                <form method="POST" action="{!! route('bricks.brick.destroy', $brick->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-wrapper btn-wrapper-backend" role="group">
                                        <a href="{{ route('bricks.brick.show', $brick->id ) }}" class="btn btn-backend btn-table" title="Show Brick">
                                            <span aria-hidden="true"></span>Show
                                        </a>
                                        <a href="{{ route('bricks.brick.edit', $brick->id ) }}" class="btn btn-backend btn-table" title="Edit Brick">
                                            <span aria-hidden="true"></span>Edit
                                        </a>

                                        <button type="submit" class="btn btn-backend btn-danger btn-table" title="Delete Brick" onclick="return confirm(&quot;Delete Brick?&quot;)">
                                            <span  aria-hidden="true"></span>Delete
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>




            {!! $bricks->render() !!}

        
        @endif

        <div class="btn-wrapper btn-wrapper-backend" role="group">
            <a href="/admin" class="btn btn-backend btn-back" title="back">
                <span>Back</span>
            </a>
        </div>
    
    </div>

    </div>
@endsection