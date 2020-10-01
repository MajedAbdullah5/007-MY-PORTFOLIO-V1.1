<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MessageModel;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    function showMessagePage()
    {
        return view('/content/Message');
    }

    function getMessageList()
    {
        return MessageModel::all();
    }

    function deleteMessage(Request $request)
    {
        return DB::table('messages')->where('id', '=', $request->id)->delete();
    }
}

