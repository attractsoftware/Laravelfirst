<form method="post" action="{{URL:: to('profile')}}">
    @csrf
{{--    </br>ID</br><input type="text" name="id">--}}
{{--    </br>Name</br><input type="text" name="name">--}}
{{--    </br>Age</br><input type="text" name="age">--}}
{{--    </br>--}}
{{--    <button>submit</button>--}}



    </br>Name<br><br><input type="name"  id="name" name="name">
    </br>Age<br><br><input type="age"  id="age" name="age">
    </br>Place<br><br><input type="place" id="place" name="place">
    </br>Phone<br><br><input type="pincode"  id="phone" name="phone">
    </br>Pincode<br><br><input type="pincode"  id="pincode" name="pincode">
    </br><input type="submit">
</form>





