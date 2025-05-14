<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
      public function showRegistrationForm()
    {
        return view('auth.register'); 
    }
    public function register(Request $request){
        //validate
        $fields = $request -> validate([
            'username' => ['required','max:255'],
            'email' => ['required','max:255','email','unique:users'],
            'password' => ['required','min:3','confirmed']
        ]);
        
        //Register
        $user = User::create($fields);

        
        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route('home');
        
    }

    // login user
    public function login(Request $request){
         //validate
        $fields = $request -> validate([
            'email' => ['required','max:255','email'],
            'password' => ['required']
        ]);
        
        //try to login the user
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended('/dashboard');
        }else{
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
        
    }

    //logout user
    public function logout(Request $request){
        //logout the user
       Auth::logout(); 

       //Invalidate user's session 
       $request->session()->invalidate();

       //Regenerate CSRF token
       $request->session()->regenerateToken();

       //redirect to home
       return redirect('/');
    }
}
