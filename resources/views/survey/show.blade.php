@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h1>{{ $questionnaire->title}}</h1>

            <form action="/surveys/{{ $questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
                @csrf

                @foreach($questionnaire->questions as $key => $question)
                <div class="card mt-4">


                    <div class="card-header"><strong>{{$key+1}}</strong> {{$question->question}}</div>



                    <div class="card-body">

                        @error('responses.' . $key . '.answer_id')
                        <small class="text-danger">{{ $message}}</small>
                        @enderror
                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                            <label for="answers{{$answer->id}}">
                                <li class="list-group-item">
                                    <input type="radio" name="responses[{{ $key}}][answer_id]"
                                        id="answers{{$answer->id}}" value="{{$answer->id}}"
                                        {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : '' }}
                                        class="mr-2">
                                    {{$answer->answers}}

                                    <input type="hidden" name="responses[{{ $key }}][question_id]"
                                        value="{{$question->id}}">


                                </li>
                            </label>
                            @endforeach
                        </ul>

                    </div>
                </div>
                @endforeach

                <div class="card mt-4">
                    <div class="card-header">Enter your Information</div>

                    <div class="card-body">

                        <div>
                            <label for="name">Name</label>
                            <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="namehelp"
                                placeholder="Enter Name">
                            <small id="nameHelp" class="form-text text-muted">Hey! What's your name please?</small>
                            @error('survey.name')
                            <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label for="email">Email</label>
                            <input name="survey[email]" type="email" class="form-control" id="email" aria-describedby="emailhelp"
                                placeholder="Enter Email">
                            <small id="emailHelp" class="form-text text-muted">Enter your email here</small>
                            @error('survey.email')
                            <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>

                    </div>


                </div>
                <button type="submit" class="btn btn-dark">Save Survey</button>

        </div>






        </form>


    </div>
</div>
</div>
@endsection