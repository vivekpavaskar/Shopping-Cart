@extends('layouts.master')

@section('content')
<h1>Laravel shopping cart</h1>

@if (Session::has('cart'))
<ul class="list-group">
    @foreach ($products as $p)
    <li class="list-group-item">
        <div class="row">
            <div class="col-3">
                {{ $p['item']->name }}
            </div>
            <div class="col-2">
                <span class="badge badge-success">{{ $p['qty'] }}</span>
            </div>
            <div class="col-3">
                {{ $p['price'] }}
            </div>
            <div class="col-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger">Remove 1</button>
                    <button type="button" class="btn btn-danger">Remove All</button>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<h4>Total: {{ $totalPrice }}</h4>
<br>
<a href="/checkout" class="btn btn-success">Checkout</a>
@else
<h2>Your cart is empty</h2>
@endif
@endsection
