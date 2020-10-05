<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminTableMigration;

class AdminController extends Controller
{
    function adminLoginPage()
    {
        return view('content/AdminLogin');
    }

    function login(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('pass');
        $result = AdminTableMigration::where('username', '=', $user)->where('password', '=', $pass)->count();
        if ($result == 1) {
            $request->session()->put('user',$user);
            return 1;
        } else {
            return 0;
        }
    }
    function logout(Request $request){
        $request->session()->flush();
        return redirect('/adminLoginPage');
    }
}
