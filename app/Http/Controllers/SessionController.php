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
    function signin()
    {
        return view("auth.login");
    }

    function login()
    {
        return view("EstateAgency.index");
    }

    function home()
    {
        return view("EstateAgency.index");
    }

    function kost()
    {
        return view("EstateAgency.kost");
    }

    function kontrakan()
    {
        return view("EstateAgency.kontrakan");
    }
   

}
