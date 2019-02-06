@extends('layouts.master')
@section('title', 'Create Order')

@section('content')

    <div class="content">
            

                <h2 class="auth-headline">Create New Order</h2>

            <div class="btn-wrapper btn-wrapper-edit" role="group">
                <a href="{{ route('orders.order.index') }}" class="btn btn-backend" title="Show All Order">Show all
                </a>
            </div>
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('orders.order.store') }}" accept-charset="UTF-8" id="create_order_form" name="create_order_form" class="form-group">
            {{ csrf_field() }}
            @include ('orders.form', [
                                        'order' => null,
                                      ])

                <div class="form-group">

                        <input class="btn btn-update" type="submit" value="Add">

                </div>

            </form>


    </div>

@endsection


