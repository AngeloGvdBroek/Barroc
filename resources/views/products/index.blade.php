@extends('layouts.app')

@section('content')

 <style>
     ul{
         padding-top: 50px;
     }
 </style>
    <form>
        <button name="submitbtn"></button>
        <input name="name">
        <button></button>
    </form>
        <ul>
                @foreach($products as $product)
                @if($product->amount == 0) <li> <h1> {{ $product->name }} not available  </h1>@endif
                @if($product->amount > 0) <li> <h1> {{ $product->name }} available </h1>@endif
                </li>

                @endforeach

        </ul>
    {{$products->links()}}


@endsection