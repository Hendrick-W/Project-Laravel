<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $var1 = 1;
        $var2 = 2;
        $result = $var1 + $var2;
        return "ini adalah controller dari test dan ini adalah operasi sederhana matematika: ".$result;
    }
    public function testAja(){
        return view('welcomer');
    }
}
