@extends('layouts.app')

@section('content')

<div class="container">

	<h1>Deze offerte is voor de klant: <strong>{{ $lease->user->name }}</strong></h1>

	<p>Deze offerte is aangemaakt door: <strong>{{ $lease->finance->name }}</strong></p>

	<p>Dit zijn de producten</p>

		@foreach( $lease->supplies as $supply )
			<li>{{ $supply->name }} | Prijs: €{{ $supply->price_per_unit }}</li>
		@endforeach 
	</ul>

</div>

@endsection