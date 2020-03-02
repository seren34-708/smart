<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller {
  public function index(){
    $date = ['msg'=>'名前入力'];
    return view('hello.index', $date);
  }

  public function post(Request $request){
    $msg = $request->name;
    $date = ['msg'=>$msg . 'さん'];
    return view('hello.index', $date);
  }
}
