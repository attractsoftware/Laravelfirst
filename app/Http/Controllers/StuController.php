<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StuController extends Controller
{
    function save()
    {
        $req = \request()->all();
        $name = $req['name'];
        $mark1 = $req['mark1'];
        $mark2 = $req['mark2'];
        $mark3 = $req['mark3'];
        $total = $mark1 + $mark2 + $mark3;
        $average = $total / 3;


        $res = DB::table('student')->insert([
            'name' => $name,
            'mark1' => $mark1,
            'mark2' => $mark2,
            'mark3' => $mark3,
            'total' => $total,
            'average' => $average]);


        return view('registration.student');
        $data = [
            'id' => $ret,
            'name' => $name,
            'mark1' => $mark1,
            'mark2' => $makr2,
            'mark3' => $makr3,
            'total' => $total,
            'average' => $average];

        return view("registration.edittest")->with($data);

    }

    function form()
    {
        return view('registration.student');
        return view('registration.student');
    }
}

