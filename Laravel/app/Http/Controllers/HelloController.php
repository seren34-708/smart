<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin;-40px 0px -50px 0px;}
</style>
EOF;

$body = '</head><body>';
$end = '</body></head>';

function tag($tag, $txt){
  return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
  public function index(){
    global $head, $style, $body, $end;

    $html = $head . tag("title",'Hello/Index') . $style . $body .tag('h1', 'Index') . tag('p','this is Index page')
    . '<a href = "/hello/other">go to Ohter page</a>'
    . $end;
    return $html;
  }

  public function other(){
    global $head, $style, $body, $end;

    $html = $head . tag('title','Hello/Ohter') . $style . $body
    . tag('h1','Ohter') . tag('p','this is Other page')
    . '<a href = "/hello">go to Index page</a>'
    . $end;
    return $html;
  }
}
