<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ForgetPasswordController extends Controller
{
    
    public function showResetForm(){
        return view('forget-password');
    }
    
    public function reset (Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB:: table('User')->where('email', $email)->first();
        if ($user){
            DB::table('User')->where('email', $email) ->update([
                'password' =>$password,
            ]);
            return redirect()->route('login')->with('message', 'Password updated');
        }else {
            return back()->withErrors([
                'email' => 'No account found with that email address.'
            ]);
        }
        
    }
    

}
