<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
   public function index()
   {
     return view('login');

   }
   public function checkLogin(Request $request)
   {
    $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
    ]);
    $user_data = array(

          'email' => $request->get('email'),
          'password' => $request->get('password')

    );

    if(Auth::attempt($user_data))
    {
      return redirect('main/successLogin');
    }
    else{
       return back()->with('error','Wrong Login Credentials');
    }
  }
   public function successLogin()
   {
     return view('espartoAdmin');
   }
   public function logout()
   {
     Auth::logout();
     return redirect('main');
   }
}
