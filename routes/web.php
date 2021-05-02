<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// students
Route::resource('students', 'StudentController');

// teachers
Route::resource('teachers', 'TeacherController');

// subjects
Route::resource('subjects', 'SubjectController');

// grades
Route::resource('grades', 'GradesController');






