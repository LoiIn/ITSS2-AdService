<!DOCTYPE html>
<html>
   <head>
      <title>HTML Image as link</title>
   </head>
   <body>
      click +1 :<br>
      <a href="{{ route('test', ['id' => $id]) }}">
         return ads page
      </a>
   </body>
</html>