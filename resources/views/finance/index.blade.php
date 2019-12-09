@extends('layouts/app')

@section('content')

<div class="container">
	<h1>Welkom op de Finance pagina</h1>

    <a href="{{ route('invoices.index') }}"><p>Factuur beheer pagina</p></a>
</div>

@endsection