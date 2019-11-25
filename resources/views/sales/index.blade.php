@extends('layouts/app')

@section('content')

<div class="container">
    <a href="{{ route('customers.index') }}"><p>Klanten beheer pagina</p></a>
    <a href="{{ route('quotes.index') }}"><p>Offerte pagina</p></a>
</div>

@endsection