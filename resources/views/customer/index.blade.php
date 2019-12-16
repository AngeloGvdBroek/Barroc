@extends('layouts.app')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
			<h2>Welkom op de Klanten pagina</h2>
		</div>
	
		<div class="card-body">
			<a href="{{ route('customers.show', Auth::id()) }}"><p>Persoonsgegevens</p></a>
	    	<a href="{{ route('customer.quotes') }}"><p>Factuurgegevens</p></a>
	    	<a href="{{ route('customer.leases') }}"><p>Leasegegevens</p></a>
		</div>
	</div>
</div>

@endsection