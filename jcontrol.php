<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>JCONTROL</title>
      <link rel="stylesheet" type="text/css" href="jstyle.css">

   </head>
   <body>
   <div class="state">
   <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         

         if (isset($_POST['top'])) {
               print($_POST['top']);
         } else if (isset($_POST['bottom'])){
               print($_POST['bottom']);
         }  else if (isset($_POST['right'])){
               print($_POST['right']);
         }
           else if (isset($_POST['left'])){
               print($_POST['left']);
         } else if (isset($_POST['stop'])){
               print($_POST['stop']);
         }
         if (isset($_POST['ttop']) &&  $_POST['ttop'] == 'ttop'){
            print($_POST['ttop']);
            print("test");
         }
      }
   ?>
   </div>
   </body>
</html>
