<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
     public function index()
    {
        return view('pages.register.register');
    }
}