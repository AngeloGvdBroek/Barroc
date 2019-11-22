@extends('layouts/app')

@section('content')

<div class="container">
	
	<h1>Offerte aanmaken</h1>

	@if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form action="{{ route('quotes.store') }}" method="POST">
    	@csrf

    	<div class="form-group">
			<label for="customerId">Customer ID</label>
			<select class="form-control" name="customerId" id="">
                @foreach( $customers as $customer )
                    <option value="{{ $customer->id }}"> {{ $customer->name }}</option>
                @endforeach
            </select>
		</div>

		<div class="form-group">
			<label for="product">Product</label>
			<input class="form-control" type="text" name="product">
		</div>

		<div class="form-group">
			<label for="amount">Aantal</label>
			<input class="form-control" type="text" name="amount">
		</div>

		<div class="form-group">
			<label for="price">Prijs</label>
			<input class="form-control" type="text" name="price">
		</div>

		<div class="form-group">
            <input class="btn btn-primary" type="submit" value="Maak offerte aan">
        </div>

    </form>

</div>

@endsection