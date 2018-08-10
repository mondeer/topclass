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

Route::get('newblog', 'BlogCtrl@index');

Route::post('newblog', 'BlogCtrl@postCreate');

Route::get('topblogs', 'BlogCtrl@show');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Route::post('subscribe', 'SubCtrl@Subscribe');

// Auth::routes();

Route::get('/register', 'RegisterCtrl@register');

Route::post('/system/register', 'RegisterCtrl@postRegister');

Route::get('login', function(){
  return view('auth.login');
});
Route::post('login', 'LoginCtrl@login');

Route::get('topclass/admin', function(){
  return view('topclass.home');
});

Route::post('/topclass/assignment', 'QuizCtrl@postQuiz');
