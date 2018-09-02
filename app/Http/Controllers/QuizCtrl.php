<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use topclass\Quiz;
use topclass\Freelance;
use Kagga\Telco\facades\Telco;
use Mail;
use Illuminate\Http\File;

class QuizCtrl extends Controller
{
    public function indexQuiz(){
      return view('topclass.customers.submit');
    }
    public function postQuiz(Request $request) {
      $quiz = new Quiz();

      $quiz->subject = $request->input('subject');
      $quiz->level = $request->input('level');
      $quiz->work_type = $request->input('work_type');
      $quiz->page_count = $request->input('page_count');
      $quiz->language = $request->input('language');
      $quiz->deadline = $request->input('deadline');
      $quiz->topic = $request->input('topic');
      $quiz->instructions = $request->input('instructions');
      $quiz->email = $request->input('email');
      $quiz->phone = $request->input('phone');
      $quiz->writer = 'topclass';
      $quiz->save();

      $customer = $request->input('email');

      Telco::send('+254724871111, +254727698888', 'Hi Topclass, an assignment from '.$customer.' has been submitted, check in urgently');

      return view('topclass.customers.success');
    }

    public function viewQuiz() {
      $quizes = Quiz::all();

      return view('topclass.assignment.view')->with('quizes', $quizes);
    }

    public function assView($id) {
      $ass = Quiz::findOrFail($id);

      return view('topclass.assignment.assview')->with('ass', $ass);
    }

    public function indexWriter($id) {
      $assignment = Quiz::findOrFail($id);

      $writers = Freelance::all()->where('status_of_acceptance', 'hired');

      return view('topclass.assignment.admin.update')->with(array(
                                                            'assignment' => $assignment,
                                                            'writers' => $writers
                                                             ));

    }

    public function assignWriter(Request $request, $id) {
      $assignment = Quiz::findOrFail($id);

      $assignment->writer = $request->input('writer');
      $assignment->save();

      return redirect('topclass/viewquiz/'.$assignment->id)->with('assignment', $assignment);
    }

    public function submitQuiz(Request $request, $id) {
      $assignment = Quiz::findOrFail($id);

      $email = $assignment->email;
      $title = ($assignment->first_name.' '.$assignment->last_name);
      $content = $assignment->instructions;
      $data = array(
        'email' => $email,
        'content' => $content
      );
      $attach = $request->file('solution');
      // $attach = ('/root/Laravel/Monetary/top/public/'.$solution);

      Mail::send('topclass.emails.submit', ['title' => $title, 'content' => $content], function($message) use($attach) {

        $message->to('keringlab@yahoo.com', 'Laban Kering')
  	            ->subject('Solution to problem');
        $message->attach($attach->getRealPath(),
                [
                    'as' => $attach->getClientOriginalName(),
                    'mime' => $attach->getClientMimeType(),
                ]);
  	    $message->from('mondiakering@gmail.com','TopClass Writers');
  	  });

      return redirect()->back()->with('assignment', $assignment);
    }

    public function destroy($id) {
      $quiz = Quiz::findOrFail($id);

      $quiz->delete();

      return redirect()->back();
    }
}
