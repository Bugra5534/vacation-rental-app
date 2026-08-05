<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationsController extends Controller
{
    function index(){
        return view('vacations');
    }

    function detail(){
        return view('vacation-details');
    }
}
