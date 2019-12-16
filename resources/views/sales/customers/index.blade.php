@extends('layouts/app')

@section('content')

<div class="container">
	
	<div class="card">
		<div class="card-header">
			Alle klanten
		</div>

		<div class="card-body">
			<ul>
				@foreach( $users as $user )
					<li><a href="{{ route('customers.show', $user->id) }}">{{ $user->name }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>

	{{ $users->links() }}

	<a class="btn btn-primary" href="{{ route('customers.create') }}">Maak klant aan</a>

</div>

@endsection