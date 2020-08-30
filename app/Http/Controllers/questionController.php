<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Questionnaire;

use \App\Question;

class questionController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }


    public function create(Questionnaire $questionnaire){


        return view('questions.create' , compact('questionnaire'));

    }


    public function store(Questionnaire $questionnaire){

        // dd(request()->all());


      $data =request()->validate([
            'question.question' => 'required',
            'answer.*.answers' =>'required' ,

      ]);

      $question = $questionnaire->questions()->create($data['question']);

      $question->answers()->createMany($data['answer']);

        return redirect('/questionnaires/' . $questionnaire->id);



    }




}
