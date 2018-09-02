<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use topclass\Quiz;
use Kagga\Telco\facades\Telco;

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

    public function destroy($id) {
      $quiz = Quiz::findOrFail($id);

      $quiz->delete();

      return redirect()->back();
    }
}
