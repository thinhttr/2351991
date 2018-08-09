<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin cPanel</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="{{url('public/back')}}/css/login.css">
</head>
<body>
  <div class="login">
  <div class="login-header">
    <h1>@yield('title')</h1>
  </div>
  @if(Session::has('error'))
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('error')}}
  </div>
   @endif
   @if(Session::has('success'))
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('success')}}
  </div>
  @endif
  @yield('main')
</div>
</body>
</html>