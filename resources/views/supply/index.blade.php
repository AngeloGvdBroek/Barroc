<form action="{{route('supply.filter')}}" method="post">
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
        <ul>
            @foreach($supply as $suppl)
                @if($suppl->in_stock == 0) <li> <h1> {{ $suppl->name }} not available  </h1>@endif
                @if($suppl->in_stock > 0) <li> <h1> {{ $suppl->name }} available </h1>@endif
                </li>

                @endforeach
                    {{$supply->links()}}
        </ul>
        {{$supply->links()}}
    </div>

</form>
