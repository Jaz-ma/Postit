<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('Auth.login');
    }

    public function store(Request $request){

        $request->validate([
            'username'=> 'required|max:255',
            'password'=> 'required'
           ]);

           if(auth()->attempt($request->only('username','password'),$request->remember)){
            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('message','User Successfully Logged in');
        }
        return back()->with('message','Invalid Credentials');


    }
}
