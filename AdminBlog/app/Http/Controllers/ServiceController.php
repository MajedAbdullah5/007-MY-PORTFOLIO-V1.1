<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serviceModel;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function showServicePage()
    {
        return view('/content/Services');
    }

    function getServicesList()
    {
        return serviceModel::all();
    }

    function populateData(Request $request)
    {
        return serviceModel::where('id', '=', $request->id)->first();

    }

    function updateServiceData(Request $request)
    {
        $id = $request->input('id');
        $updateName = $request->input('updateName');
        $updateDes = $request->input('updateDes');
        $updateServiceLink = $request->input('updateServiceLink');
        $updateImageLink = $request->input('updateImageLink');
        return DB::table('services')->where('id', '=', $id)->update(['service_name' => $updateName, 'service_des' => $updateDes, 'service_link' => $updateServiceLink, 'service_image' => $updateImageLink]);
    }

    function deleteServiceData(Request $request)
    {
        return serviceModel::where('id', '=', $request->id)->delete();
    }

    function addServices(Request $request)
    {
        $addServiceName = $request->input('addServiceName');
        $addServiceDes = $request->input('addServiceDes');
        $addServiceLink = $request->input('addServiceLink');
        $addServiceImage = $request->input('addServiceImage');
        return DB::table('services')->insert(['service_name' => $addServiceName, 'service_des' => $addServiceDes, 'service_link' => $addServiceLink, 'service_image' => $addServiceImage]);

    }
}
