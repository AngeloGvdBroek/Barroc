@extends('layouts/app')

@section('content')

<div class="container">
	
	<h1>Klant aanmaken</h1>

	@if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
    	@csrf

		<div class="form-group">
			<label for="companyName">Bedrijfsnaam</label>
			<input class="form-control" type="text" name="companyName">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control" type="email" name="email">
		</div>

		<div class="form-group">
			<label for="password">Wachtwoord</label>
			<input class="form-control" type="text" name="password">
		</div>

		<div class="form-group">
			<label for="address">Adres</label>
			<input class="form-control" type="text" name="address">
		</div>

		<div class="form-group">
			<label for="city">Plaats</label>
			<input class="form-control" type="text" name="city">
		</div>

		<div class="form-group">
			<label for="postalCode">Postcode</label>
			<input class="form-control" type="text" name="postalCode">
		</div>

		<div class="form-group">
			<label for="phoneNumber">Telefoonnummer</label>
			<input class="form-control" type="text" name="phoneNumber">
		</div>

		<div class="form-group">
            <input class="btn btn-primary" type="submit" value="Maak klant aan">
        </div>

    </form>

</div>

@endsection