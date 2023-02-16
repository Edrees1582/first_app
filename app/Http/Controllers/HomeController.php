<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function signup()
    {
        return view('signup');
    }

    public function signupStore(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $password = $request->password;
        $passwordRepeted = $request->passwordR;
        
        if ($password == $passwordRepeted) {
            $user->password = bcrypt($password);
            $user->save();
            return redirect('users');
        }

    }
}
