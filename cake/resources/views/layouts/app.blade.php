<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

    @include('layouts.css')
</head>
<body >
 
 <div class="wrapper">
  @include('layouts.header')
   
   @yield('content')
   
    @include('layouts.footer')
 
 </div>

     <a href="#" class="top-arrow"></a>
     @include('layouts.js')
</body>
</html>