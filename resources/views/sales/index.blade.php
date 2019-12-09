@extends('layouts/app')

@section('content')

<div class="container">
	<h1>Welkom op de Sales pagina</h1>

    <a href="{{ route('customers.index') }}"><p>Klanten beheer pagina</p></a>
    <a href="{{ route('quotes.index') }}"><p>Offerte pagina</p></a>
</div>

@endsection