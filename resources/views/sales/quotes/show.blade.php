@extends('layouts/app')

@section('content')

<div class="container">
	
	<h1>{{ $quote->product }}</h1>

	<p>Deze offerte is voor de klant: <strong>{{ $customer->company_name }}</strong></p>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aspernatur voluptatum quidem nemo veritatis tenetur doloribus est sed qui iste sit, voluptas sint magni ducimus quos at tempora consectetur recusandae, cupiditate blanditiis eaque minima alias. Velit cumque dicta alias, temporibus!</p>

	<a href="{{ route('customers.index') }}" class="btn btn-primary">Naar alle offertes</a>

</div>

@endsection