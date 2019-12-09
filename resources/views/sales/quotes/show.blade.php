@extends('layouts/app')

@section('content')

<div class="container">

	<h1>Deze offerte is voor de klant: <strong>{{ $customer->name }}</strong></h1>

	<p>Deze offerte is aangemaakt door: <strong>{{ $user->name }}</strong></p>

	<p>Dit zijn de producten</p>

		@foreach( $quotes as $quote )
			<li>{{ $quote->purchase['supplies'] }} | aantalx</li>
		@endforeach 
	</ul>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aspernatur voluptatum quidem nemo veritatis tenetur doloribus est sed qui iste sit, voluptas sint magni ducimus quos at tempora consectetur recusandae, cupiditate blanditiis eaque minima alias. Velit cumque dicta alias, temporibus!</p>

	<a href="{{ route('quotes.index') }}" class="btn btn-primary">Naar alle offertes</a> 

</div>

@endsection