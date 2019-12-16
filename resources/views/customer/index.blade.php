@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Welkom op de Klanten pagina</h1>

    <a href="{{ route('customers.show', Auth::id()) }}"><p>Persoonsgegevens</p></a>
    <a href="{{ route('customer.quotes') }}"><p>Factuurgegevens</p></a>
    <a href="{{ route('customer.leases') }}"><p>Leasegegevens</p></a>
</div>

@endsection