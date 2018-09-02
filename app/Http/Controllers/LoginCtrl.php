<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;

class LoginCtrl extends Controller
{
  public function login(Request $request) {
    try {
      if ( Sentinel::authenticate($request->all()) ) {

        if(Sentinel::getUser()->roles()->first()->slug == 'admin')
          return redirect('/topclass/admin');
        elseif (Sentinel::getUser()->roles()->first()->slug == 'freelancer')
          return redirect('/topclass/admin');
        elseif (Sentinel::getUser()->roles()->first()->slug == 'customer')
          return redirect('/school/admin');

      } else {
        return redirect()->back()->with(['error' => 'Have you forgoten your credentials?']);
      }
    } catch (ThrottlingException $e) {
        $delay = $e->getDelay();

        return redirect()->back()->with(['error' => 'you have been banned for '.$delay.' seconds']);
    }
  }

  public function logout() {
    Sentinel::logout();

    return redirect('/');
  }
}
