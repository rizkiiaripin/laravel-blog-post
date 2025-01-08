<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function show(){
        return view('register',['title' => 'Register']);
    }
    public function register(Request $request){
        
        $validateData = $request->validate([
            'name' =>'required|max:255',
            'username' => ['required','max:255','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        User::create($validateData);
        
        return redirect('/login')->with('success','Register success please login');
    }
}
