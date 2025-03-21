<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        if (session('admin')) {
            return redirect('/admin');
        }
        return view('admin.auth.login');
    }

    public function login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if (!$user || ($req->password != $user->password)) {
            return redirect()->back()->with('alert', 'Invalid Email/Password');
        } else {
            $req->session()->put('admin', '$user');
            return redirect('/admin')->with('status', 'You Login Successfully');
        }
    }

    public function logOut(Request $req)
    {
        $req->session()->remove('admin');
        return redirect('./login');
    }
}
