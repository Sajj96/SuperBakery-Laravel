<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('logininto');
    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password') 
        );

        if(Auth::attempt($user_data))
        {
            return redirect('main/successlogin');
        }
        else
        {
            return back()->with('error', 'Incorrect Email or Password');
        }
    }

    public function successlogin()
    {
        return view('homepage');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('site');
    }
}
