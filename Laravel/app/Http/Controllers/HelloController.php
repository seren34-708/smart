<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller {
  public function index(){
    $msg = ['msg'=>''];
    $date = ['date' => ['one', 'two', 'three']];
    return view('hello.index', $msg, $date);
  }

  public function post(Request $request){
    return view('hello.index', ['msg'=>$request->name]);
  }
}
