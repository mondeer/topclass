<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/topclass/services', function(){
  return view('services');
});

// blogs start
Route::get('newblog', 'BlogCtrl@index');

Route::post('newblog', 'BlogCtrl@postCreate');

Route::get('topblogs', 'BlogCtrl@show');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Route::get('topclass/adminblogs', 'BlogCtrl@adminBlogs');

// end blogs

Route::post('subscribe', 'SubCtrl@Subscribe');

//Admin routes;
Route::get('/topclass/register', 'RegisterCtrl@register');

Route::post('/system/register', 'RegisterCtrl@postRegister');

Route::get('login', function(){
  return view('auth.login');
});
Route::post('login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@logout');

Route::get('topclass/admin', function(){
  return view('topclass.home');
});

// quiz routes client
Route::get('/assignment/submit', 'QuizCtrl@indexQuiz');

Route::post('/assignment/submit', 'QuizCtrl@postQuiz');

Route::get('/ass/submit/success', function(){
  return view('topclass.customers.success');
});

// end quiz client

// quiz control admin
Route::get('/topclass/viewquiz', 'QuizCtrl@viewQuiz');

Route::get('topclass/viewquiz/{id}', 'QuizCtrl@assView');

Route::get('/topclass/quiz-assign-writer/{id}', 'QuizCtrl@indexWriter');

Route::put('/topclass/quiz-assign-writer/{id}', 'QuizCtrl@assignWriter');

Route::delete('/topclass/quiz/{id}', 'QuizCtrl@destroy');

Route::post('/topclass/quiz/submit/{id}', 'QuizCtrl@submitQuiz');

// end admin quiz control

// Freelancers
Route::get('/freelancers/enroll', function(){
  return view('topclass.freelancers.enroll');
});

Route::post('/freelancers/enroll', 'FreelanceCtrl@enrollFreelance');

// admin view writer applications
Route::get('/topclass/freelance/applications', 'FreelanceCtrl@viewApplications');

Route::put('/topclass/writer/hire/{id}', 'FreelanceCtrl@acceptWriter');

Route::get('/topclass/freelance/hired', 'FreelanceCtrl@hiredWriters');

Route::delete('/topclass/freelance/application/{id}', 'FreelanceCtrl@destroy');

// ASSIGNMENT
