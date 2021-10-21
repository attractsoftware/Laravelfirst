<form id="save" method="post" action="{{ url::to ('form1') }}">
    @csrf
    </br>studentname</br><input type="text" name="tudentname" value="studentname" id="studentname">
    </br>fathername</br><input type="text" name="fathername" value="fathername" id="fathername">
    </br>mark1</br><input type="text" name="mark1" value="mark1" id="mark1">
    </br>mark2</br><input type="text" name="mark2" value="mark2" id="mark2">
    </br>mark3</br><input type="text" name="mark3" value="mark3" id="mark3">
    </br>total</br><input type="text" name="total" value="total" id="total">
    </br>average</br><input type="text" name="average" value="average" id="average">

    <input type="submit" value="submit">


</form>
