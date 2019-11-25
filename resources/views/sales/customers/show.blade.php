@extends('layouts/app')

@section('content')

<div class="container">
	
	<h1>{{ $customer->company_name }}</h1>

	<h2 class="h2-small">Gegevens</h2>

	<p><strong>Email:</strong> {{ $user->email }}</p>
	<p><strong>Adres:</strong> {{ $customer->addres }}, {{ $customer->city }} {{ $customer->postaddres }} </p>
	<p><strong>Telefoonnummer:</strong> {{ $customer->phonenumber }}</p>

	<a href="{{ route('customers.index') }}" class="btn btn-primary">Naar alle klanten</a>

</div>

@endsection