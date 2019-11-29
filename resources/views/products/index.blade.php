@extends('layouts.app')

@section('content')

 <style>
     ul{
         padding-top: 50px;
     }
 </style>
 <form action="{{route('productsController.filter')}}" method="post">
     @csrf
     <div class="form-group">
         <input type="text" name="name">
         <input type="submit" name="submitbtn" value="search">
         <input type="submit" name="submitbtn" value="clear">
     </div>

     <div class="form-group">
         <input type="radio" value="enough" name="enough"> Beschikbaar
         <input type="radio" value="to-little" name="enough"> Niet Beschikbaar
     </div>

     <div class="form-group">
     </div>

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