<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Session::has('user')){
            return redirect()->route('index')->with('message', 'You are already logged in');
        }
        return view('login');
    }

    public function login(Request $request)
    {   
        
        $username = $request->input('username');
        $password = $request->input('password');
        $remember = $request->has('remember');
     
        //dd($username, $password, $remember);
       
        $user = DB::table('User')->where('username', $username)->first();

        if ($user && ($password== $user->password)) {
          
            if ($remember) {
              
                Cookie::queue('remember_me', $username, 120); 
            }
            
         
            Session::put('user', $user);

            return redirect()->route('index')->with('message', 'login success!');
        }
        else {
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
        


    }
    public function logout(Request $request)
    {
       if (Session::has('user')){
        Session::forget('user');
        Session::flush();
       }
       else {
        return redirect()->route('login')->with('message', 'Not LOGIN yet');
       }
      
        if (Cookie::get('remember_me')) {
            Cookie::queue(Cookie::forget('remember_me'));
        }

     
        return redirect()->route('login')->with('message', 'You have been logged out successfully.');
    }
    
}
