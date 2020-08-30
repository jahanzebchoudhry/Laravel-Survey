<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questionnaire;

class surveyController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');
    }


    public function show(Questionnaire $questionnaire , $slug){

        // dd($questionnaire);

        $questionnaire->load('questions.answers');

        return view('survey.show' , compact('questionnaire'));

    }



    public function store(Questionnaire $questionnaire){

        // dd(request()->all());

        $data = request()->validate([

            'responses.*.question_id' => 'required' ,
            'responses.*.answer_id' => 'required' ,
            'survey.name' => 'required' ,
            'survey.email' =>'required'            

        ]);


            $survey = $questionnaire->surveys()->create($data['survey']);

            $survey->responses()->createMany($data['responses']);

            return "Thank you!";
        
 
    }
}
