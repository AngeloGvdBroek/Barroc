@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('supply.filter')}}" method="post">
        @csrf
        <div class="form-group input-group mb-3">
            <input class="form-control" type="text" name="name">
            <input class="btn btn-outline-secondary" type="submit" name="submitbtn" value="search">
        </div>

        <div class="form-group">
            <input type="radio" value="enough" name="enough"> Beschikbaar
            <input type="radio" value="to-little" name="enough"> Niet Beschikbaar
        </div>

        <div class="form-group">
            <ul class="list-group list-group-flush">
                @foreach($supplies as $supply)
                    @if($supply->in_stock == 0)
                        <li class="list-group-item">{{ $supply->name }} <span style="color:red">[NIET OP VOORRAAD]</span></li>
                    @endif

                    @if($supply->in_stock > 0)
                        <li class="list-group-item">{{ $supply->name }} <span style="color:green">[Aantal op voorraad: {{ $supply->in_stock }}]</span></li>
                    @endif

                @endforeach
            </ul>

            {{$supplies->links()}}
        </div>
    </form>
</div>

@endsection
