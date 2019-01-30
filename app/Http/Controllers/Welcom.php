<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Welcom extends Controller
{
    public function __construct()
    {
        //$this->middleware('ip');
    }

    public function index(){
        return view('welcome');
    }

}
