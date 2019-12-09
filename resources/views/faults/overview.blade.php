@extends('layouts.app')
@section('content')
    <div class="container">
    <form action="{{ route('faults.store') }}" method="post" enctype="multipart/form-data">

    @csrf

    <h1>Storingsmeldingen:</h1>
    <ul>
        @foreach($faults as $fault)
            <li> <h1> {{ $fault->Title }}, {{ $fault->Description }} </h1>   </li>
        @endforeach
    </ul>

</form>
    </div>
    @endsection