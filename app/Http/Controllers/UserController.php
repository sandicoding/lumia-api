<?php

namespace App\Http\Controllers;
use App\User;


class Controller extends BaseController
{
     public function index()
    {
        $getPost = User::OrderBy("id", "DESC")->paginate(10);
 
        $out = [
            "message" => "list_post",
            "results" => $getPost
        ];
 
        return response()->json($out, 200);
    }
}
