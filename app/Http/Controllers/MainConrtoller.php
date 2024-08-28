<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainConrtoller extends Controller
{
    public function index()
    {
        return view('index');
    }

}
