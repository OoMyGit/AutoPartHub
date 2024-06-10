<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
            'address' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        // Begin a transaction
        DB::beginTransaction();

        try {
                        // Create a new customer record
            DB::table('User')->insert([
                'name' => $request->first_name . ' ' . $request->last_name,
                'birthdate' => $request->birthdate,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'province' => $request->province,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,

            ]);

            // Commit the transaction
            DB::commit();

            return redirect()->route('login')->with('message', 'Registration successful.');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();

            return redirect()->route('signup')->with('message', 'Registration not successful.');
        }
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Retrieve the user credentials from the database
        $user = DB::table('User_Credentials')->where('email', $request->email)->first();

        if ($user && $request->password === $user->password) {
            // Check if the 'remember me' option was checked
            $remember = $request->has('remember');

            if ($remember) {
                // Set cookies for username and user ID (not password)
                Cookie::queue('username', $user->username, 60 * 24 * 30);
                Cookie::queue('id_user', $user->id_user, 60 * 24 * 30);
            } else {
                // Store user ID in the session
                Session::put('id_user', $user->id_user);
                Session::put('username', $user->username);
            }

            return redirect()->intended('dashboard')->with('success', 'Login Successful');
        } else {
            return redirect('login')->withErrors(['error' => 'Login Failed! Please Try Again.']);
        }
    }
}
