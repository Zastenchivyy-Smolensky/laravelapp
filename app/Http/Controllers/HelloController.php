<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data=[
            "msg"=>"this is sample code",
            ];
        return view("hello.index",$data);
    }
    public function post(Request $request)
    {
        $msg=$request->msg;
        $data=[
            "msg"=>"こんにちは".$msg."さん!"
        ];
        return view("hello.index",$data);
    }

}