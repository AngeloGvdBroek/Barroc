@extends('layouts/app')

@section('content')

<div class="container">
	<h1>Welkom op de Inkoop pagina</h1>

    <a href=""><p>Lorem ipsum dolor.</p></a>
</div>

<form action="{{route('supply')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name">
        <input type="submit" name="submitbtn" value="search">
        <input type="submit" name="submitbtn" value="clear">
    </div>

    <div class="form-group">
        <input type="radio" value="enough" name="enough"> Beschikbaar
        <input type="radio" value="to-little" name="enough"> Niet Beschikbaar
    </div>

    <div class="form-group">
    </div>

</form>

@endsection
