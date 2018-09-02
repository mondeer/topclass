<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use topclass\Freelance;
use Sentinel;

class FreelanceCtrl extends Controller
{
    public function enrollFreelance(Request $request) {
      $freelance = new Freelance();

      $freelance->first_name = $request->input('first_name');
      $freelance->last_name = $request->input('last_name');
      $freelance->category_of_freelance = $request->input('category_of_freelance');
      $freelance->years_of_experience = $request->input('years_of_experience');
      $freelance->email = $request->input('email');
      $freelance->phone = $request->input('phone');
      $freelance->save();

      return view('topclass.freelancers.success')->with('freelance', $freelance);
    }
}
