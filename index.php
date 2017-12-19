 !<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Json</title>
   </head>
   <body>
     <?php

     $file = 'school3.json';
     if(file_exists($file)) {
       $filedata = file_get_contents($file);
       $objson = json_decode($filedata, true);
         echo"<hr><code><pre>";
         print_r($objson);
         echo"</pre></code><hr>";
     }
     else echo $file . 'not exists';


     //test de output
     echo($objson['school']['Mediacollege']['courses']['MD']);
     echo("<br>");
     echo($objson['school']['Horizoncollege']['courses']['VZ']);

      ?>

   </body>
 </html>
