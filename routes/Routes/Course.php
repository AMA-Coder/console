<?php

Route::post('create-course',['uses'=>'CoursesController@initCreate','as'=>'create.course']);
Route::get('edit-course/{id}',['uses'=>'CoursesController@edit','as'=>'edit.course']);
Route::post('save-basic-course/{id}',['uses'=>'CoursesController@saveBasic','as'=>'save-basic.course']);