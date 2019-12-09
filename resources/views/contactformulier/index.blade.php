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

            <form method="GET" action="{{url('/')}}"> {{--url('sendemail/send')--}}

            @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="text">Bericht</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="button">
                        <h3 class="barroc_yellow">submit</h3>
                    </button>
                </div>
            </form>

        </div>

@endsection