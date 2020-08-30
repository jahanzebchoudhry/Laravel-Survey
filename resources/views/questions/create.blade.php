@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">Create a New Question</div>

                    <form action="/questionnaires/{{ $questionnaire->id}}/question"  method= "post">
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" id="question"
                                aria-describedby="questionhelp" placeholder="Enter question" value="{{old('question.question')}}">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point
                                questions</small>
                            @error('question.question')
                            <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <legend>Choices</legend>
                            <small id="choicesHelp" class="form-text text-muted">Choices give hint to the
                                questions</small>
                        </div>

                        <div>
                            <fieldset>
                                <label for="answer1">Choice 1</label>
                                <input name="answer[][answers]" type="text" class="form-control" id="answer1"
                                    aria-describedby="answerhelp" placeholder="Enter choice 1" value="{{ old('answer.0.answers') }}">
                                @error('answer.0.answers')
                                <small class="text-danger">{{ $message}}</small>
                                @enderror
                            </fieldset>
                        </div>

                        <div>
                            <fieldset>
                                <label for="answer2">Choice 2</label>
                                <input name="answer[][answers]" type="text" class="form-control" id="answer2"
                                    aria-describedby="answerhelp" placeholder="Enter choice 2" value="{{ old('answer.1.answers') }}">
                                @error('answer.1.answers')
                                <small class="text-danger">{{ $message}}</small>
                                @enderror
                            </fieldset>
                        </div>

                        <div>
                            <fieldset>
                                <label for="answer3">Choice 3</label>
                                <input name="answer[][answers]" type="text" class="form-control" id="answer3"
                                    aria-describedby="answerhelp" placeholder="Enter choice 3" value="{{ old('answer.2.answers') }}">
                                @error('answer.2.answers')
                                <small class="text-danger">{{ $message}}</small>
                                @enderror
                            </fieldset>
                        </div>

                        <div>
                            <fieldset>
                                <label for="answer4">Choice 4</label>
                                <input name="answer[][answers]" type="text" class="form-control" id="answer4"
                                    aria-describedby="answerhelp" placeholder="Enter choice 4" value="{{ old('answer.3.answers') }}">
                                @error('answer.3.answers')
                                <small class="text-danger">{{ $message}}</small>
                                @enderror
                            </fieldset>
                        </div><br> 
                        <div>
                        <button type="submit" class="btn btn-dark">Create Question</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection