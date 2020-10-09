<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;

class FullCourse extends Controller
{
    function fullCourseList(){
        $result = CourseModel::all();
        return view('/content/CourseList',['result'=>$result]);
    }
}
