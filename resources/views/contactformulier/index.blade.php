@extends('layouts/app')

@section('content')

        <div class="container">

            <h1>contact formulier aanmaken</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('contactformulier.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="text">Bericht</label>

                </div>
            </form>

        </div>

@endsection