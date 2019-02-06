@extends('layouts.master')
@section('title', 'Bricks')

@section('content')

    <div class="content">
       <h2 class="auth-headline">Welcome back Admin</h2>

        <h3>Choose one</h3>

        <div class="btn-wrapper btn-wrapper-show" role="group">
            <a href="/bricks" class="btn btn-backend btn-admin" title="Show All Bricks">Bricks
            </a>

            <a href="/bodyparts" class="btn btn-backend btn-admin" title="Create New Brick">Bodyparts
            </a>

            <a href="/orders" class="btn btn-backend btn-admin" title="Edit Brick">Orders
            </a>
        </div>

    </div>
@endsection