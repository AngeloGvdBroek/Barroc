@extends('layouts/app')

@section('content')

<div class="container">

	<ul>
	@foreach( $users as $user )
		<li><a href="{{ route('customers.show', $user->id) }}">{{ $user->name }}</a></li>
	@endforeach
	</ul>

	{{ $users->links() }}

	<a class="btn btn-primary" href="{{ route('customers.create') }}">Maak klant aan</a>

</div>

@endsection