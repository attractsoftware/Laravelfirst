<form id="file" name="file"method="post" action="{{URL::to('file')}}">
    @csrf
    </br>Id:<input type="text" name="id" value="{{$id}}">
    </br>Name:<input type="text" name="name" value="{{$name}}">
    </br>mark1:<input type="text" name="mark1" value="{{$mark1}}">
    </br>mark2:<input type="text" name="mark2" value="{{$mark2}}">
    </br>mark3:<input type="text" name="mark3" value="{{$mark3}}">
    </br>total:<input type="text" name="total" value="{{$total}}">
    </br>average:<input type="text" name="average" value="{{$average}}">
    <input type="submit" >

</form>
