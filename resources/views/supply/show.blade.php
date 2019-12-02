@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"> {{ $product->name }} </h1>
            <p class="card-text"> {{ $product->price }} </p>

            <img src="{{asset('storage/images/' . $product->image_path)}}" height="300">
            <br>
            <br>
{{--            <button>Add to shopping card</button>--}}
            @auth    <div class="editbutton">  <a class="btn btn-primary" href="{{ route('supply', $product->id) }}">EDIT</a> </div> @endauth

            <form method="POST" action="{{ route('supply', $product->id) }}">
                @csrf
                @method('DELETE')

                @auth  <input class="btn btn-warning" type="submit" value="DELETE"> @endauth

            </form>

            <form action="{{route('orders.store', )}}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="submit" value="Buy" class="btn btn-info">
            </form>

        </div>
    </div>
@endsection
<style>

    .editbutton {display: block;}
</style>