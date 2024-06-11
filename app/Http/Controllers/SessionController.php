<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function index()
    {
        return view("auth.login");

    }
    function register()
    {
        return view("auth.register");
    }
    // function login()
    // {
    //     return view("EstateAgency.index");
    // }

}
