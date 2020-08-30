@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="/questionnaire/create" class="btn btn-dark">Create a Questionnaire</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">My Questionnaires</div>

                <div class="card-body">

                    <div class="list-group">
                        @foreach($questionnaires as $questionnaire)
                        <li class="list-group-item">
                            <a href="/questionnaires/{{$questionnaire->id}}">{{  $questionnaire->title }}</a>


                            <div>
                                <small class="font-weight-bold">Share URL</small>
                            </div>

                            <div>
                                <a href="{{ $questionnaire->publicpath() }}">
                                {{ $questionnaire->publicpath() }}</a>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection