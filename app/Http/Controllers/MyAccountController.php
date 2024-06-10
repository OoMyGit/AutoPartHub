<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class MyAccountController extends Controller
{

    public function MyAccount(Request $request)
        {

            $user = Session::get('user');
            $userid = $user->id_user;

            $jumlah = DB::table('Transaction')->where('id_user',$userid)->count();
            
            return view("my-account", ['user'=>$user, 'jumlah'=>$jumlah]);
        }
}