@extends('layouts.master')
@section('title', 'Edit Order')

@section('content')

    <div class="content">


                <h2 class="auth-headline">{{ !empty($title) ? $title : 'Order' }}</h2>

            <div class="btn-wrapper btn-wrapper-edit" role="group">

                <a href="{{ route('orders.order.index') }}" class="btn btn-backend" title="Show All Order">Show all
                </a>

                <a href="{{ route('orders.order.create') }}" class="btn btn-backend" title="Create New Order">Create New
                </a>

            </div>


            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('orders.order.update', $order->id) }}" id="edit_order_form" name="edit_order_form" accept-charset="UTF-8" class="form-group">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('orders.form', [
                                        'order' => $order,
                                      ])

                <div class="form-group">

                        <input class="btn btn-update" type="submit" value="Update">
                </div>
            </form>

    </div>

@endsection