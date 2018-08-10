<?php

namespace topclass\Http\Controllers;

use Illuminate\Http\Request;
use topclass\Quiz;

class QuizCtrl extends Controller
{
    public function postQuiz(Request $request) {
      $quiz = new Quiz();

      $quiz->email_customer = $request->input('email');
      $quiz->question = $request->input('assignment');
      $quiz->due_date = $request->input('due_date');
      $quiz->length_of_assignment = $request->input('length_of_assignment');
      $quiz->save();

      return redirect()->back();
    }
}
