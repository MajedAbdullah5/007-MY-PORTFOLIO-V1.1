<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photo_gallery_model;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    function photo_gallery(){
        return view('/content/photo_gallery');
    }
    function addPhotos(Request $request){
        $file = $request->file('photo')->store('public');
        $fileName =(explode('/',$file))[1];
        $hostName = $_SERVER['HTTP_HOST'];
        $result = 'http://'.$hostName.'/storage/'.$fileName ;
        return DB::table('photo_gallery')->insert(['location'=>$result]);
    }
    function photoOnScroll(){
        return photo_gallery_model::orderBy('id','desc')->get();
    }
}
