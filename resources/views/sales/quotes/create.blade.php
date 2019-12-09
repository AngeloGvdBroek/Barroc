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
			<label for="customerId">Klant</label>
			<select class="form-control" name="customerId" id="">
                @foreach( $customers as $customer )
                    <option value="{{ $customer->id }}"> {{ $customer->name }}</option>
                @endforeach
            </select>
		</div>

		@foreach($products as $product)
		<div class="row">
			<div class="col">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="{{ $product->id }}" name="product{{ $product->id }}">
					<label class="form-check-label" for="product{{ $product->id }}">{{ $product->name }}</label>
				</div>
			</div>
			<div class="col">
				<input class="form-control" type="text" name="amount{{ $product->id }}" placeholder="Aantal">
			</div>
		</div>
		@endforeach

		<div class="form-group">
			<label for="price">Totaal prijs</label>
			<input class="form-control" type="text" name="price" placeholder="Totaal prijs">
		</div>

		<div class="form-group">
            <input class="btn btn-primary" type="submit" value="Maak offerte aan">
        </div>

    </form>

</div>

@endsection