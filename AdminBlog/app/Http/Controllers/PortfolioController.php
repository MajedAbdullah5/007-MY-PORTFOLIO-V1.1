<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\career_objectives;
use Illuminate\Support\Facades\DB;

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



}
