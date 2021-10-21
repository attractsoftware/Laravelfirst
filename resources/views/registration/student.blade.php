<form id="save" name="save"method="post" action="{{URL::to('save')}}">
    @csrf
    </br>Name:<input type="text" name="name" value="">
    </br>mark1:<input type="text" name="mark1" value="">
    </br>mark2:<input type="text" name="mark2" value="">
    </br>mark3:<input type="text" name="mark3" value="">
    </br>total:<input type="text" name="total" value="">
    </br>average:<input type="text" name="naaverageme" value="">
    <input type="submit" >

</form>
