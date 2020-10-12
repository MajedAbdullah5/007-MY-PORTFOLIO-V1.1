<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseModel;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    function showCoursePage()
    {
        return view('/content/Course');
    }

    function getCourseList()
    {
        return CourseModel::orderBy('id','desc')->get();
    }

    function populateCourseId(Request $request)
    {
        ;
        return CourseModel::where('id', '=', $request->id)->first();
    }

    function updateCourseData(Request $request)
    {
        $id = $request->input('id');
        $courseName = $request->input('courseName');
        $courseFee = $request->input('courseFee');
        $courseTotalClass = $request->input('courseTotalClass');
        $courseEnroll = $request->input('courseEnroll');
        $courseLink = $request->input('courseLink');
        $file = $request->file('file')->store('public');
        $fileName = (explode('/', $file))[1];
        $host = $_SERVER['HTTP_HOST'];
        $courseImage = 'http://' . $host . '/storage/' . $fileName;
        $courseDescription = $request->input('courseDescription');
        return DB::table('courses')->where('id', '=', $id)->update(['course_name' => $courseName, 'course_fee' => $courseFee, 'course_total_class' => $courseTotalClass, 'course_total_enroll' => $courseEnroll, 'course_link' => $courseLink, 'course_image' => $courseImage, 'course_des' => $courseDescription]);

    }

    function courseDelete(Request $request)
    {
        return CourseModel::where('id', '=', $request->id)->delete();
    }

    function addCoursesData(Request $request)
    {
        $addCourseName = $request->input('addCourseName');
        $addCourseFee = $request->input('addCourseFee');
        $addCourseTotalClas = $request->input('addCourseTotalClass');
        $addCourseTotalEnroll = $request->input('addCourseTotalEnroll');
        $addCourseLink = $request->input('addCourseLink');
        $file = $request->file('file')->store('public');
        $fileName = (explode('/', $file))[1];
        $host = $_SERVER['HTTP_HOST'];
        $addCourseImage = 'http://' . $host . '/storage/' . $fileName;
        $addCoursesDescription = $request->input('addCoursesDescription');
        return DB::table('courses')->insert(['course_name' => $addCourseName, 'course_fee' => $addCourseFee, 'course_total_class' => $addCourseTotalClas, 'course_total_enroll' => $addCourseTotalEnroll, 'course_link' => $addCourseLink, 'course_image' => $addCourseImage, 'course_des' => $addCoursesDescription]);
    }
}
