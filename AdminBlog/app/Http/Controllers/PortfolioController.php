<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\career_objectives;
use App\education_model;
use App\language_model;

class PortfolioController extends Controller
{
    //Career Objectives

    function showPortfolioPage()
    {
        return view('/content/Portfolio');
    }

    function getObjetiveList()
    {
        return career_objectives::get()->first();
    }

    function populateObjectives(Request $request)
    {
        return career_objectives::where('id', '=', $request->id)->first();
    }

    function updateObjectives(Request $request)
    {
        return DB::table('career_objectives')->where('id', '=', $request->id)->update(['objectives' => $request->objectives]);
    }

    //Education
    function getEducationList()
    {
        return education_model::all();
    }
    function populateEducationId(Request  $request){
        return education_model::where('id','=',$request->id)->first();
    }
    function educationUpdate(Request $request){
        $id =                   $request->input('id');
        $educationDuration =    $request->input('educationDuration');
        $educationInstitute =   $request->input('educationInstitute');
        $educationCertificate = $request->input('educationCertificate');
        $educationMajor =       $request->input('educationMajor');
        $educationCgpa =        $request->input('educationCgpa');
        $educationBoard =       $request->input('educationBoard');
        return DB::table('education')->where('id','=',$id)->update(['education_duration'=>$educationDuration,'education_institute'=>$educationInstitute,'education_certificate'=>$educationCertificate,'education_major'=>$educationMajor,'education_gpa'=>$educationCgpa,'education_board'=>$educationBoard]);
    }
    function deleteEducation(Request $request){
        return education_model::where('id','=',$request->id)->delete();
    }
    function addEducation(Request $request){
        $educationDuration =    $request->input('educationDuration');
        $educationInstitute =   $request->input('educationInstitute');
        $educationCertificate = $request->input('educationCertificate');
        $educationMajor =       $request->input('educationMajor');
        $educationCgpa =        $request->input('educationCgpa');
        $educationBoard =       $request->input('educationBoard');
        return DB::table('education')->insert(['education_duration'=>$educationDuration,'education_institute'=>$educationInstitute,'education_certificate'=>$educationCertificate,'education_major'=>$educationMajor,'education_gpa'=>$educationCgpa,'education_board'=>$educationBoard]);
    }

    //Language
    function PortfolioController(){
       return language_model::all();
    }


}
