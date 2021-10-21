<form id="dashboard" method="post" action="{{URL:: to('save')}}">
    @csrf
    </br>First Name<input type="text" name="fname" id="fname">
    </br>Last Name <input type="text" name="lname" id="lname">
    </br>Email-id  <input type="email" name="email" id="email">
    </br>          <input type="submit" value="submit" >



</form>
