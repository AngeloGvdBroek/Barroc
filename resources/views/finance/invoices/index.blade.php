@extends('layouts/app')

@section('content')

<div class="container">

	<ul>
	@foreach( $quotes as $quote )
		<li><a href="{{ route('invoices.show', $quote->id) }}">{{ $quote->user->name }}</a></li>
	@endforeach
	</ul>

	{{ $quotes->links() }}

</div>

@endsection