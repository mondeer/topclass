<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterCtrl extends Controller
{
  public function register() {
    return view('auth.register');
  }

  public function postRegister(Request $request) {
    $user = Sentinel::registerAndActivate([
      'email'=>$request->input('email'),
      'password'=>$request->input('password'),
      'first_name'=>$request->input('first_name'),
      'last_name'=>$request->input('last_name'),
    ]);

    $admin = Sentinel::findRoleBySlug('admin');
    $freelancer = Sentinel::findRoleBySlug('freelancer');
    $customer = Sentinel::findRoleBySlug('customer');

    $role = $request->input('role');

    if($role =='admin'){
      $admin->users()->attach($user);
    }
    elseif($request->input('role')=='freelancer'){
      $freelancer->users()->attach($user);
    }
    elseif($request->input('role')=='customer'){
      $customer->users()->attach($user);
    }

    return redirect('/login');

  }
}
