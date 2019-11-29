@extends('layouts.app')

@section('content')

    @auth  <a href="{{ route('products.create') }}">CREATE</a> @endauth

        <ul>
                @foreach($products as $product)
                @if($product->amount == 0) <li> <h1> {{ $product->name }} not available  </h1>@endif
                @if($product->amount > 0) <li> <h1> {{ $product->name }} available </h1>@endif
                </li>

                @endforeach

        </ul>
    {{$products->links()}}


@endsection