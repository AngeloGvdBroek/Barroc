@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>Create Fault</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <form action="{{ route('faults.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input class="form-control" type="text" name="title" value="{{old('title')}}">
        </div>

        <div class="form-group">
            <label for="price">Description</label>
            <input class="form-control" type="text" name="description" id="" value="{{old('description')}}">
        </div>



        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Submit Fault">
        </div>
    </form>
    </div>
@endsection
