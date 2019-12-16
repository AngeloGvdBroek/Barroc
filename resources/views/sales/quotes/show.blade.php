@extends('layouts/app')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
			Offerte voor: <strong>{{ $customer->name }}</strong></h1>
		</div>

		<div class="card-body">
			<p>Deze offerte is aangemaakt door: <strong>{{ $user->name }}</strong></p>

			<h5>Inbegrepen producten</h5>

			<ul class="list-group list-group-flush">
				@foreach( $quote->purchase->supplies as $supply )
					<li class="list-group-item">{{ $supply->name }} | {{ $supply->pivot->amount }}x</li>
				@endforeach 
			</ul>
		</div>
	</div>
		
	<a href="{{ route('quotes.index') }}" class="btn btn-primary">Naar alle offertes</a> 

</div>

@endsection

