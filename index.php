<html>
 <head>
  <title>PHP w00t!</title>
 </head>
 <body>
 <center>
   <?php
   $timezone  = 1;
   echo gmdate("j/m/Y H:i:s", time() + 3600*($timezone));
   ?>
 </br>
 </center>
 </body>
</html>
