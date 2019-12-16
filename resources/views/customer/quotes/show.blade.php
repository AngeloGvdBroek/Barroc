@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Deze offerte is voor de klant: <strong>{{ $customer->name }}</strong></h1>

	<p>Deze offerte is aangemaakt door: <strong>{{ $user->name }}</strong></p>

	<p>Dit zijn de producten</p>

		@foreach( $quote->purchase->supplies as $supply )
			<li>{{ $supply->name }} | {{ $supply->pivot->amount }}x</li>
		@endforeach 
	</ul>

</div>

@endsection

