@extends('layout.master')
@section('body')

    <div class="row">
        @foreach($courses as $course)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>{{$course->name}}</h3>
                        <p>instructor name</p>
                        <p>rate</p>
                        <p class="pull-right">price</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <form method="post" action="{{route('create.course')}}">
        {{csrf_field()}}{{method_field('POST')}}
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <input type="text" class="form-control" name="course-name" id="course-name">
            </div>
            <button type="submit" class="btn btn-success"> Create Course</button>
        </div>
    </form>
@endsection