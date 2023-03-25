<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ecomm;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request)
    {
      $user=ecomm::where(['email'=>$request->email])->first();
      if (!$user || !Hash::check($request->password,$user->password))
      {
          return "user name password is not match";
      }
      else
      {
          $request->session()->put('user',$user);
          return redirect('/');
      }
    }
}
