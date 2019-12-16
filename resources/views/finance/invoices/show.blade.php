@extends('layouts/app')

@section('content')

<div class="container">

	<h1>Deze offerte is voor de klant: <strong>{{ $quote->user->name }}</strong></h1>

	<p>Deze offerte is aangemaakt door: <strong>{{ $quote->sale->name }}</strong></p>

	<p><strong>Let op!</strong>
		@if ( $quote->finance_approved == null )
			Deze offerte is nog niet goed gekeurd.
		@else
			Deze offerte is goed gekeurd
		@endif
	</p>

	<p>Dit zijn de producten</p>

	<ul>
		@foreach( $quote->purchase->supplies as $supply )
			<li>{{ $supply->name }} | {{ $supply->pivot->amount }}x</li>
		@endforeach 
	</ul>

	@if ( $quote->finance_approved == null )
		<form action="{{ route('invoices.update', $quote->id) }}" method="POST">
			@method('PUT')
			@csrf
			
			<input type="hidden" name="financeApproved" value="true">
			<input type="submit" class="btn btn-primary" value="Offerte goedkeuren en naar de klant versturen">
		</form>
	@endif
	
	<a href="{{ route('quotes.index') }}" class="btn btn-primary">Naar alle offertes</a> 

</div>

@endsection