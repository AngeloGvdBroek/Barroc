@extends('layouts/app')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>Welkom op de Sales pagina</h1>
		</div>

		<div class="card-body">
			<a href="{{ route('customers.index') }}"><p>Klanten beheer pagina</p></a>
    		<a href="{{ route('quotes.index') }}"><p>Offerte pagina</p></a>
		</div>
	</div>
</div>

@endsection