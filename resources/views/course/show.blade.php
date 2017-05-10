@extends('layout.master')

@section('body')
    <div class="container">
        <div class="jumbotron">
            <h1>{{$course->name}}</h1>
            <p>Instructor Name</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Publish Course</a></p>
        </div>
    </div>
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="#basics" aria-controls="home" role="tab" data-toggle="tab">Course
                    Basics</a></li>
            <li role="presentation"><a href="#summary" aria-controls="home" role="tab" data-toggle="tab">Course
                    Summary</a></li>
            <li role="presentation"><a href="#image" aria-controls="home" role="tab" data-toggle="tab">Image</a></li>
            <li role="presentation"><a href="#promo" aria-controls="home" role="tab" data-toggle="tab">Promo Video</a>
            </li>
        </ul>
    </div>

    <div class="col-md-10">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="basics">
                @include('course.tabs.home')
            </div>
            <div role="tabpanel" class="tab-pane" id="summary">
                @include('course.tabs.summary')
            </div>
            <div role="tabpanel" class="tab-pane" id="image">
                @include('course.tabs.image')
            </div>
            <div role="tabpanel" class="tab-pane " id="promo">
                @include('course.tabs.promo')
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection