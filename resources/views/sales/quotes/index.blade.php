@extends('layouts/app')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
			Alle offertes
		</div>

		<div class="card-body">
			<ul>
				@foreach( $quotes as $quote )
					<li><a href="{{ route('quotes.show', $quote->id) }}">{{ \App\User::find($quote->customer_id)->name }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>

	{{ $quotes->links() }}

	<a class="btn btn-primary" href="{{ route('quotes.create') }}">Maak offerte aan</a>

</div>

@endsection