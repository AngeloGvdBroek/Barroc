@extends('layouts/app')

@section('content')

<div class="container">

	<ul>
	@foreach( $customers as $customer )
		<li><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->company_name }}</a></li>
	@endforeach
	</ul>

	{{ $customers->links() }}

	<a class="btn btn-primary" href="{{ route('customers.create') }}">Maak klant aan</a>

</div>

@endsection