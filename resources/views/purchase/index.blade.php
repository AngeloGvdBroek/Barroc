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