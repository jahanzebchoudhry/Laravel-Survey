<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaire/create' , 'questionnaireController@create');
Route::post('/questionnaires' , 'questionnaireController@store');
Route::get('/questionnaires/{questionnaire}' , 'questionnaireController@show');
Route::delete('/questionnaires/{questionnaire}/{question}' , 'questionnaireController@destroy');


Route::get('/questionnaires/{questionnaire}/question/create' , 'questionController@create');
Route::post('/questionnaires/{questionnaire}/question' , 'questionController@store');

Route::get('/surveys/{questionnaire}-{slug}' , 'surveyController@show');

Route::post('/surveys/{questionnaire}-{slug}' , 'surveyController@store');






