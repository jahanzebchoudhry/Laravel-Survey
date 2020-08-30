@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">

                    @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" 
                                aria-describedby="titlehelp" placeholder="Enter Title" >
                            <small id="titleHelp" class="form-text text-muted">Title will let you know about the questainnaire</small>
                            @error('title')
                                   <small class="text-danger">{{ $message}}</small>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input name="purpose"  type="text" class="form-control" id="purpose"
                                aria-describedby="purposehelp" placeholder="Enter Purpose">
                            <small id="purposeHelp" class="form-text text-muted">purpose describes why you are creating Questionnaire</small>
                        
                            @error('purpose')
                                   <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>

                           

                        <button type="submit" class="btn btn-dark">Create Questionnaire</button>
                      
                        

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection