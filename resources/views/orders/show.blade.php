@extends('layouts.master')
@section('title', 'Show Order')

@section('content')

    <div class="content">


            <h2 class="auth-headline">{{ isset($title) ? $title : 'Order' }}</h2>



            <form method="POST" action="{!! route('orders.order.destroy', $order->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-wrapper btn-wrapper-show" role="group">
                    <a href="{{ route('orders.order.index') }}" class="btn btn-backend" title="Show All Orders">Show all
                    </a>

                    <a href="{{ route('orders.order.create') }}" class="btn btn-backend" title="Create New Order">Create
                    </a>
                    
                    <a href="{{ route('orders.order.edit', $order->id ) }}" class="btn btn-backend" title="Edit Order">Edit
                    </a>

                    <button type="submit" class="btn btn-backend btn-danger" title="Delete Order" onclick="return confirm(&quot;Delete Order??&quot;)">Delete
                    </button>
                </div>
            </form>



    <div class="about-us-wrapper">
        <dl class="dl-horizontal">
            <dt>Users</dt>
            <dd>{{ optional($order->user)->name }}</dd>
            <dt>Order id</dt>
            <dd>{{ $order->id }}</dd>
            <dt>Ears</dt>
            <dd>{{ optional($order->ear)->name }}</dd>
            <dt>Eyes</dt>
            <dd>{{ optional($order->eye)->name }}</dd>
            <dt>Noses</dt>
            <dd>{{ optional($order->nose)->name }}</dd>
            <dt>Mouths</dt>
            <dd>{{ optional($order->mouth)->name }}</dd>
            <dt>Tails</dt>
            <dd>{{ optional($order->tail)->name }}</dd>
            <dt>Shoes</dt>
            <dd>{{ optional($order->shoe)->name }}</dd>
            <dt>Created At</dt>
            <dd>{{ $order->created_at }}</dd>
            <dt>Created By</dt>
            <dd>{{ optional($order->creator)->name }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $order->updated_at }}</dd>
            <dt>Updated By</dt>
            <dd>{{ optional($order->updater)->name }}</dd>

        </dl>

    </div>
</div>

@endsection