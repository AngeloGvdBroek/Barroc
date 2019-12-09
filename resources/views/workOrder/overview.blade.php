@extends('layouts.app')
@section('content')

    <form class="workorderindex" action="{{ route('workOrders.store') }}" method="post" enctype="multipart/form-data">

    @csrf

    <h1>Products:</h1>
    <ul>
        @foreach($workorders as $workorder)
            <li> <h1> {{ $workorder->Title }}, {{ $workorder->Description }} </h1>   </li>
        @endforeach
    </ul>

</form>
    @endsection