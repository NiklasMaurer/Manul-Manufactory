@extends('layouts.master')
@section('title', 'Bodyparts')

@section('content')

    <div class="content">

    <div class="about-us-wrapper">

        <h2>Bodyparts</h2>

        @if(Session::has('success_message'))
            <div class="alert alert-success">
                {!! session('success_message') !!}

                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="close">
                     <span aria-hidden="true">&times;</span>
                 </button>--}}

            </div>
        @endif

            <div class="btn-wrapper btn-wrapper-backend" role="group">
                <a href="{{ route('bodyparts.bodypart.create') }}" class="btn btn-backend" title="Create New Bodypart">
                    <span aria-hidden="true">Create</span>
                </a>
            </div>

        
        @if(count($bodyparts) == 0)

                <h3>No Bodyparts Available!</h3>

        @else

                <table>
                    <thead>
                        <tr>
                            <th class="th-order-user">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($bodyparts as $bodypart)
                        <tr>
                            <td>{{ $bodypart->name }}</td>
                            {{--<td>{{ optional($bodypart->creator)->name }}</td>
                            <td>{{ optional($bodypart->updater)->name }}</td>--}}

                            <td>

                                <form method="POST" action="{!! route('bodyparts.bodypart.destroy', $bodypart->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-wrapper btn-wrapper-backend" role="group">
                                        <a href="{{ route('bodyparts.bodypart.show', $bodypart->id ) }}" class="btn btn-backend btn-table" title="Show Bodypart">
                                            <span aria-hidden="true"></span>Show
                                        </a>
                                        <a href="{{ route('bodyparts.bodypart.edit', $bodypart->id ) }}" class="btn btn-backend btn-table" title="Edit Bodypart">
                                            <span aria-hidden="true"></span>Edit
                                        </a>

                                        <button type="submit" class="btn btn-backend btn-danger btn-table" title="Delete Bodypart" onclick="return confirm(&quot;Delete Bodypart?&quot;)">
                                            <span aria-hidden="true"></span>Delete
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            {!! $bodyparts->render() !!}
        
        @endif

        <div class="btn-wrapper btn-wrapper-backend" role="group">
            <a href="/admin" class="btn btn-backend btn-back" title="back">
                <span>Back</span>
            </a>
        </div>

    </div>
    
    </div>
@endsection