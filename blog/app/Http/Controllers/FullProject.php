<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;

class FullProject extends Controller
{
    function fullProjectList(){
        $result = ProjectModel::all();
        return view('/content/FullProjectList',['result'=>$result]);
    }
}
