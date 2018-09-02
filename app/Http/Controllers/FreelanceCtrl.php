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

    public function viewApplications() {
      $applications = Freelance::all();

      $applicants = $applications->where('status_of_acceptance', 'pending');

      return view('topclass.freelancers.admin.view')->with('applicants', $applicants);
    }

    public function acceptWriter($id) {
      $writer = Freelance::findOrFail($id);

      $writer->status_of_acceptance = 'hired';
      $writer->save();

      return redirect()->back();
    }

    public function hiredWriters() {
      $applications = Freelance::all();

      $hires = $applications->where('status_of_acceptance', 'hired');

      return view('topclass.freelancers.admin.hired')->with('hires', $hires);
    }

    public function destroy($id) {
      $application = Freelance::findOrFail($id);

      $application->destroy();

      return redirect()->back();
    }
}
