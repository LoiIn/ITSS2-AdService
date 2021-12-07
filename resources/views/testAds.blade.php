<!DOCTYPE html>
<html>
   <head>
      <title>HTML Image as link</title>
   </head>
   <body>
      View+1, click to ads if you want clicks +1 too :<br>
      <a href="{{ route('result', ['id' => $id]) }}">
         <img alt="Qries" src="{{asset('asset/ads.png')}}">
      </a>
   </body>
</html>