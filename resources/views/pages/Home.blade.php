@extends('layouts.master')

@section('content')
<div class="card-deck mb-3">

    @foreach ($products as $p)

    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{ $p->name }} </h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <li>ID: {{ $p->id }}</li>
                <li>Description: {{ $p->description }}</li>
                <li>Price: {{ $p->price }}</li>
            </ul>
            <a href="/addToCart/{{ $p->id }}" class="btn btn-block btn-primary">Add to cart</a>
        </div>
    </div>

    @endforeach
</div>
@endsection
