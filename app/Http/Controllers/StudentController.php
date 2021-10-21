<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
//    function index()
//    {
//        return view('index');
//    }
//
//    function save()
//    {
//        $req = \request()->all();
//        print_r($req);
//
//
//    }
//
//    function profile()
//    {
////        $id = \request()->id;
////        print_r($id);
////        $name=\request()->name;
////        print_r($name);
////        $age=\request()->age;
////        print_r($age);
////        return view('homepage');
//        $req = \request()->all();
//
//
//        $name = $req['name'];
//        $age = $req['age'];
//        $place = $req['place'];
//        $phone = $req['phone'];
//        $pincode = $req['pincode'];
//
//
//        $ret = DB::table("customer")->insertGetId([
//
//            'name' => $name,
//            'age' => $age,
//            'place' => $place,
//            'phone' => $phone,
//            'pincode' => $pincode]);
////        return view("form");
//
//
//        $data = [
//            'id' => $ret,
//            'name' => $name,
//            'age' => $age,
//            'place' => $place,
//            'phone' => $phone,
//            'pincode' => $pincode];
//
//        return view("editform")->with($data);
//
//
//    }
//    function update()
//    {
//        $req = \request()->all();
//        $id = $req["id"];
//        $name = $req["name"];
//        $age = $req["age"];
//        $place = $req["place"];
//        $phone = $req["phone"];
//        $pincode = $req["pincode"];
//
//        $ret = DB::table("customer")->where(['id'=>$id])
//            ->update([
//                'name' => $name,
//                'age' => $age,
//                'place' => $place,
//                'phone' => $phone,
//                'pincode' => $pincode]);
//       // return redirect('form');
//
//
//
//
//        if($ret)
//        {
//            $data=[
//                'id' => $id,
//                'name' => $name,
//                'age' => $age,
//                'place' => $place,
//                'phone' => $phone,
//                'pincode' => $pincode];
//
//            return view("editform")->with($data);
//        }
//        else {
//            return redirect('form');
//        }
//
//
//    }

    function form1()
    {
        $req = \request()->all();
        $studentname = $req['studentname'];
        $fathername = $req['fathername'];
        $mark1 = $req['mark1'];
        $mark2 = $req['mark2'];
        $mark3 = $req['mark3'];
        $total = $mark1 + $mark2 + $mark3;
        $average = $total / 3;


        $ret = DB::table("calculate")->insertGetId([

            'studentName' => $studentname,
            'fatherName' => $fathername,
            'mark1' => $mark1,
            'mark2' => $mark2,
            'mark3' => $mark3,
            'total' => $total,
            'average' => $average]);
            //return view('calculate');


        $data = [
            'studentName' => $studentname,
            'fatherName' => $fathername,
            'mark1' => $mark1,
            'mark2' => $mark2,
            'mark3' => $mark3,
            'total' => $total,
            'average' => $average];

        return view("editform")->with($data);

    }



}
