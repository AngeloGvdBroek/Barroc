@extends('layouts.app')
@section('content')
   <div class="container">
    <h1>Create Work order</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
    <form action="{{ route('workorders.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Adress</label>
            <input class="form-control" type="text" name="work_adress" value="{{old('work_adress')}}">
        </div>

        <div class="form-group">
            <label for="price">Description</label>
            <input class="form-control" type="text" name="description" id="" value="{{old('description')}}">
        </div>

        <div class="form-group">
            <label for="price">Total price</label>
          <input class="form-control" type="text"  name="total_price" id="" value="{{old('total_price')}}">
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Submit work order">
        </div>
    </form>
   </div>
@endsection
