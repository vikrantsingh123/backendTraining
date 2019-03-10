<?php
require_once("database.php"); 
 if(isset($_GET['submit'])) {
 $title = $_GET['todoTitle'];
 $isChecked = $_GET['isChecked'];
 $id1=$_GET['id'];
 
     $link=db();
     $x=0;
     if($isChecked==true)$x=1;
    //  echo $x;
     $query = "update tasks set caption='$title',is_completed='$x' where id='$id1'";
     $alterToDo = mysqli_query($link, $query);
     if($alterToDo){
             //echo successfully";
     }else{
             //echo mysqli_error($link);
     }
     mysqli_close($link);
     }
     header("location:index.php");
?>