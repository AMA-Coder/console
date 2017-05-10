<?php

namespace App\Http\Controllers;

use App\Course;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CoursesController extends Controller
{
    function initCreate(Request $request)
    {
        $courseName = $request->get('course-name');
        $course = Course::create(['name' => $courseName]);

        return Redirect::route('edit.course', ['id' => $course->id]);
    }

    function edit($course_id)
    {
        $course = Course::find($course_id);
        $languages = Language::pluck('name','id');
        return view('course.show',compact(['course','languages']));
    }
    function saveBasic(Course $course,Request $request)
    {
        Course::where('id',$request->id)->update(['name'=>$request->name,'description'=>$request->description]);
        $course = Course::find($request->id);
        $languages = Language::pluck('name','id');
        return view('course.show',compact(['course','languages']));
    }
}
