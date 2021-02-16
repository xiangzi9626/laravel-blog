<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function test2(){
        return view("test.index2");
    }
    public function upload(){
         $arr["uploaded"]=1;
         $arr["url"]="/upload/1.png";
         echo json_encode($arr);
    }
    public function test(){
        return view("test.index");
    }
}
