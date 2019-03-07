<?php
$a=$_GET["fnum"];
$b=$_GET["secnum"];
$c=0;
if( $a&& $b ) {
    //   echo "Welcome ". $_GET['name']. "<br />";
      
    // echo $_GET["fnum"];
      for($i=1;$i<=$b;$i++){
          
          $c=$a*$i;
          echo "$a*$i=$c<br/><br/>";
          
      }

      exit();
   }
   ?>