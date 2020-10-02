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
   function home(){
       $user_ip = $_SERVER['REMOTE_ADDR'];
       date_default_timezone_set('Asia/Dhaka');
       $getDate = date('Y-m-d h:i:sa');
       VisitorsModel::insert(['ip_Address'=>$user_ip,'visit_time'=>$getDate]);


       $service = json_decode(serviceModel::all());
       $course = json_decode(courseModel::all());
       $project = json_decode(projectModel::all());

       return view('Home',["ServiceKey"=>$service,'courseKey'=>$course,'projectKey'=>$project]);

   }
   function app(){
       return view('/Layout/menu');
   }
}
