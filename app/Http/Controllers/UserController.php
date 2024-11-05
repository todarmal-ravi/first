<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function getUser() {
    //     return 'ravi';
    // }
    function getUser() {
        return view('user');
    }

    function getUserName($name) {
        // return "My Name is " . $name;
        return view('user',['name'=>$name]);
    }
}
