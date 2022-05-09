<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterCOntroller extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('Auth.register');
    }
    public function store(Request $request){
   $formFields= $request->validate([
    'name'=> 'required|max:255',
    'username'=> 'required|max:255',
    'email'=> 'required|email',
    'password'=> 'required|confirmed'
   ]);
        $formFields['password']= bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect()->route('dashboard');


    }
}
