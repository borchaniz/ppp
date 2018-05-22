<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $request){
        exec('cd '.app_path().'..\\public', $output, $ret_code);
        exec('python script.py'.
            ' '.$request->input('dep').' '.$request->input('arr').
            ' '.$request->input('debut').' '.$request->input('fin').
            ' '.$request->input('sel'), $output, $ret_code);
        $f=fopen("b.txt","r");
        $res=fgets($f);
        return view('result',['res'=>$res]);


    }
}
