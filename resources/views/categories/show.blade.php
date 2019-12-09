@extends('layouts.app')

@section('content')
    Dit is de detail page

    <h1> {{ $category->name }} </h1>
    <p> {{ $category->description }} </p>

  @auth  <a href="{{ route('categories.edit', $category->id) }}">EDIT</a> @endauth
    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
        @csrf
   @auth     @method('DELETE')

        <input type="submit" value="DELETE"> @endauth
    </form>
    <h2>Products related:</h2>
    @foreach($category->products as $product)
    <li>  <a href="{{ route('supply', $product->id ) }}"> {{ $product->name }} </a></li>
    @endforeach
@endsection