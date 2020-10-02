<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projectModel;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function showProjectPage()
    {
        return view('content/Projects');
    }

    function getProjectsList()
    {
        return projectModel::all();
    }

    function populateProjectData(Request $request)
    {
        return projectModel::where('id', '=', $request->id)->first();
    }

    function updateProjectData(Request $request)
    {
        $id = $request->input('id');
        $projectnameId = $request->input('projectnameId');
        $projectdesId = $request->input('projectdesId');
        $projectLinkId = $request->input('projectLinkId');
        $projectimageLinkId = $request->input('projectimageLinkId');
        return DB::table('projects')->where('id', '=', $id)->update(['project_name' => $projectnameId, 'project_des' => $projectdesId, 'project_link' => $projectLinkId, 'project_image' => $projectimageLinkId]);
    }

    function deleteService(Request $request)
    {
        return projectModel::where('id', '=', $request->id)->delete();
    }

    function addproject(Request $request)
    {
        $addProjectName = $request->input('addProjectName');
        $addProjectDes = $request->input('addProjectDes');
        $addProjectLink = $request->input('addProjectLink');
        $addProjectImage = $request->input('addProjectImage');
        return DB::table('projects')->insert(['project_name' => $addProjectName, 'project_des' => $addProjectDes, 'project_link' => $addProjectLink, 'project_image' => $addProjectImage]);
    }
}
