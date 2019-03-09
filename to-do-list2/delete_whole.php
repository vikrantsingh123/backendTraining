<?php
require_once("database.php"); 
 
     $link=db();
     if($isChecked==true)$x=1;
     $query = "truncate tasks";
     
     $deleteTodo = mysqli_query($link, $query);
     if($deleteTodo){
             echo "Deleted successfully";
     }else{
             echo mysqli_error($link);
     }
     mysqli_close($link);
     
?>