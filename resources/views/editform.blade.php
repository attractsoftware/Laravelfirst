<form name="fist" id="first" method="post" action="{{ URL::to('update') }}">
    @csrf
    <br>Id<input name="id" id="id" value="{{$id}}">
    <br>Name<input name="name" id="name" value="{{$name}}">
    <br>Age<input name="age" id="age" value="{{$age}}">
    <br>Place<input name="place" id="age" value="{{$place}}">
    <br>Phone<input name="phone" id="phone" value="{{$phone}}">
    <br>Pincode<input name="pincode" id="pincode" value="{{$pincode}}">
    <input type="submit" >
</form>
