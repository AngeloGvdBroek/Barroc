@extends('layouts/app')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
			Alle invoices
		</div>

		<div class="card-body">
			<ul>
				@foreach( $quotes as $quote )
					<li><a href="{{ route('invoices.show', $quote->id) }}">{{ $quote->user->name }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>

	{{ $quotes->links() }}

</div>

@endsection