<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitorsModel;
use App\CourseModel;
use App\MessageModel;
use App\ProjectModel;
use App\ServiceModel;

class HomeController extends Controller
{
    function home()
    {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $getDate = date('Y-m-d h:i:sa');
        VisitorsModel::insert(['ip_Address' => $user_ip, 'visit_time' => $getDate]);


        $service = json_decode(serviceModel::offset(0)->limit(4)->get());
        $course = json_decode(courseModel::offset(0)->limit(3)->get());
        $project = json_decode(projectModel::all());

        return view('Home', ["ServiceKey" => $service, 'courseKey' => $course, 'projectKey' => $project]);

    }

    function app()
    {
        return view('/Layout/menu');
    }

    function projectView(Request $request)
    {
        ;
        $result = ProjectModel::where('id', '=', $request->id)->get();
        $res = json_decode($result);
        return view('/content/ViewProject', ['result' => $res]);
    }

}
