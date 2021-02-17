<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Http\Controllers\home\ExampleController;
use Egulias\EmailValidator\EmailParser;
use Illuminate\Http\Request;

class TestController extends Controller
{
public function testajax(){
    echo "abcd";
}
    public function test2(){
        return view("test.index2");
    }
    public function upload(){
         $arr["uploaded"]=1;
         $arr["url"]="/upload/1.png";
         echo json_encode($arr);
    }
    public function test(){
   $browser=$_SERVER["HTTP_USER_AGENT"];
   $url="/static/upgrade_browser/upgrade.html";
     if (strpos($browser,"MSIE 8.0")){
     return redirect($url);
    }else if(strpos($browser,"MSIE 7.0")){
         return redirect($url);
     }else if(strpos($browser,"MSIE 6.0")){
         return redirect($url);
     }
        //return view("test.index");
    }
}
