<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
  </head>
  <body>
    <h1>Blade</h1>
    @if ($msg)
    <p>{{$msg}}</p>
    @else
    <p>お名前を入力してください</p>
    @endif
    <form class="" method="POST" action="/hello">
      {{ csrf_field() }}
      <input type="text" name="name">
      <input type="submit">
    </form>
  </body>
</html>
