@extends('layouts.app')

@section('content')

<div class="container">

	<ul>
	@foreach( $leases as $lease )
		<li><a href="{{ route('customer.leasesShow', $lease->id) }}">{{ \App\User::find($lease->customer_id)->name }}</a></li>
	@endforeach
	</ul>

	{{ $leases->links() }}

</div>

@endsection