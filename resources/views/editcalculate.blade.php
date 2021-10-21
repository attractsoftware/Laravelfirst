<form name="second" id="second" method="post" action="{{ URL::to('updatefile') }}">
    @csrf
    <br>Id<input name="id" id="id" value="{{$id}}">
    <br>studentname<input name="studentname" id="studentname" value="{{$studentname}}">
    <br>fathername<input name="fathername" id="fathername" value="{{$fathername}}">
    <br>mark1<input name="mark1" id="mark1" value="{{$mark1}}">
    <br>mark2<input name="phone" id="mark2" value="{{$mark2}}">
    <br>mark3<input name="mark3" id="mark3" value="{{$mark3}}">
    <br>total<input name="total" id="total" value="{{$total}}">
    <br>average<input name="average" id="average" value="{{$average}}">
    <input type="submit" >
</form>
