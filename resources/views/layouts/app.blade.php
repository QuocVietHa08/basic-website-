<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Website</title>
     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')
    <div class="flex mx-40 my-4">
        <div class="flex-1">
         @include('inc.message')

           @yield('content') 
        </div>
        <div class="flex-none">
           @include('inc.sidebar')
        </div>
   </div>
   @include('inc.footer')
   </body>
</html>