@extends('layouts/app')

@section('content')

<div class="container">
	
	<h1>{{ $user->name }}</h1>

	<h2 class="h2-small">Gegevens ( bewerken )</h2>

	<form action="{{ route('customers.update', $user->id) }}" method="POST">
		@method('PUT')
    	@csrf

    	<div class="form-group">
			<label for="companyName">Bedrijfsnaam</label>
			<input class="form-control" type="text" name="companyName" value="{{ $user->name }}">
		</div>

    	<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" type="email" name="email" value="{{ $user->email }}">
		</div>

		<div class="form-group">
			<label for="password">Wachtwoord</label>
			<input class="form-control" type="password" name="password">
		</div>

		<div class="form-group">
			<label for="bkr">BKR</label>

			<input type="checkbox" name="bkr" class="switch-input" value="1" {{ old('bkr') ? 'checked="checked"' : '' }} @if($user->bkr == 1) checked=checked @endif
			>

		</div>
		<div class="form-group">
            <input class="btn btn-primary" type="submit" value="Gegevens opslaan">
        </div>
	</form>

	<a href="{{ route('customers.index') }}" class="btn btn-primary">Naar alle klanten</a>

</div>

@endsection