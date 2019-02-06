@extends('layouts.master')
@section('title', 'Orders')

@section('content')

    <div class="content">

        <div class="about-us-wrapper">


                <h2>Orders</h2>

            @if(Session::has('success_message'))
                <div class="alert-success">

                    {!! session('success_message') !!}

                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>--}}

                </div>
            @endif

            <div class="btn-wrapper btn-wrapper-backend" role="group">
                <a href="{{ route('orders.order.create') }}" class="btn btn-backend" title="Create New Order">
                    <span aria-hidden="true">Create</span>
                </a>
            </div>

        
        @if(count($orders) == 0)

                <h3>No Orders Available!</h3>

        @else


                <table>
                    <thead>
                        <tr>
                            <th class="th-order-user">Users</th>
                            <th class="th-brick-name">Order id</th>
                            {{--<th>Eyes</th>
                            <th>Noses</th>
                            <th>Mouths</th>
                            <th>Tails</th>
                            <th>Shoes</th>
                            <th>Created By</th>
                            <th>Updated By</th>--}}
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ optional($order->user)->name }}</td>
                            <td class="td-brick-name">{{ optional($order)->id }}</td>
                            {{--<td>{{ optional($order->ear)->name }}</td>
                            <td>{{ optional($order->eye)->name }}</td>
                            <td>{{ optional($order->nose)->name }}</td>
                            <td>{{ optional($order->mouth)->name }}</td>
                            <td>{{ optional($order->tail)->name }}</td>
                            <td>{{ optional($order->shoe)->name }}</td>
                            <td>{{ optional($order->creator)->name }}</td>
                            <td>{{ optional($order->updater)->name }}</td>--}}

                            <td>

                                <form method="POST" action="{!! route('orders.order.destroy', $order->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-wrapper btn-wrapper-backend" role="group">
                                        <a href="{{ route('orders.order.show', $order->id ) }}" class="btn btn-backend btn-table" title="Show Order">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>Show
                                        </a>
                                        <a href="{{ route('orders.order.edit', $order->id ) }}" class="btn btn-backend btn-table" title="Edit Order">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit
                                        </a>

                                        <button type="submit" class="btn btn-backend btn-danger btn-table" title="Delete Order" onclick="return confirm(&quot;Delete Order?&quot;)">
                                            <span aria-hidden="true"></span>Delete
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            {!! $orders->render() !!}
        
        @endif

            <div class="btn-wrapper btn-wrapper-backend" role="group">
                <a href="/admin" class="btn btn-backend btn-back" title="back">
                    <span>Back</span>
                </a>
            </div>
    
    </div>

    </div>
@endsection