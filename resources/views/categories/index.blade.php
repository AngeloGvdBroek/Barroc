@extends('layouts.app')

@section('content')
        <h2><a href="{{ route('supply')}}">Go to Products</a></h2>
        <h1>Categories:</h1>
        <ul>
                @foreach($categories as $category)
                        <li> <a href="{{ route('categories.show', $category->id ) }}"> {{ $category->name }}  </a>   </li>
                @endforeach
        </ul>
     @auth   <a href="{{ route('categories.create') }}">CREATE</a> @endauth
@endsection