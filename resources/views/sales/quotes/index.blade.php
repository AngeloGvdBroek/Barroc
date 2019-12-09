@extends('layouts/app')

@section('content')

<div class="container">

	<ul>
	@foreach( $quotes as $quote )
		<li><a href="{{ route('quotes.show', $quote->id) }}">{{ \App\User::find($quote->customer_id)->name }}</a></li>
	@endforeach
	</ul>

	{{ $quotes->links() }}

	<a class="btn btn-primary" href="{{ route('quotes.create') }}">Maak offerte aan</a>

</div>

@endsection