<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
  </head>
  <body>
    <h1>Blade</h1>
    <p>{{$msg}}</p>
    <form class="" method="POST" action="/hello" method="post">
      {{ csrf_field() }}
      <input type="text" name="name">
      <input type="submit">
    </form>
  </body>
</html>
