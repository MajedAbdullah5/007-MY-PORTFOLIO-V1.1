<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;

class FullCourse extends Controller
{
    function fullCourseList(){
        $result = CourseModel::orderBy('id','desc')->get();
        return view('/content/CourseList',['result'=>$result]);
    }
}
