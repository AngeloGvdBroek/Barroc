@extends('layouts.app')
@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input name="name" type="text" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="">price</label>
            <input type="text" name="price" value="{{ $product->price }}" id="">
        </div>

        <div class="form-group">
            <label for="">categorie</label>
            <select name="categorie_id" id="">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="avatar">Picture:</label>

            <input type="file" id="image" name="image">
        </div>
        <input type="submit" value="Edit category">
    </form>
@endsection