@extends('layouts/app')

@section('content')

    <div class="container">

        <h1>Producten bestellen</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif

        <form action="{{ route('productorders.store') }}" method="POST">
@csrf



            @foreach($products as $product)
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $product->id }}" name="product{{ $product->id }}">
                            <label class="form-check-label" for="supplies_id{{ $product->id }}">{{ $product->name }}</label>
                            <input class="form-control" type="number" value="{{ $product->id }}" name="amount{{ $product->id }}" placeholder="Aantal">
                        </div>
                    </div>
{{--                    <div class="col">--}}
{{--                        <input class="form-control" type="number" name="amount" placeholder="Aantal">--}}
{{--                    </div>--}}
{{--                    <input class="btn btn-primary" type="submit" value="Koop producten">--}}
                </div>
            @endforeach

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Koop producten">
            </div>

        </form>

    </div>

@endsection