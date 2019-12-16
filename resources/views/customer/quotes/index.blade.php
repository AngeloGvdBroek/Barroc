@extends('layouts/app')

@section('content')

<div class="container">

	<ul>
	@foreach( $quotes as $quote )
		<li><a href="{{ route('customer.quotesShow', $quote->id) }}">{{ \App\User::find($quote->customer_id)->name }}</a></li>
	@endforeach
	</ul>

	{{ $quotes->links() }}

</div>

@endsection