<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{

    public function Signup(Request $request)
        {
            return view("signup");
        }
}