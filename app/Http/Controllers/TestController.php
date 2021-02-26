<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request){
        // dd($request->all());
        // dd($request->input('comment'));
        $comment = $request->input('comment');
        // $var1 = 1;
        // $var2 = 2;
        // $result = $var1 + $var2;
        // return "ini adalah controller dari test dan ini adalah operasi sederhana matematika: ".$result;
        return view('child', ['nama' => $comment]);
    }
    public function testAja(){
        return view('welcomer');
    }
}
