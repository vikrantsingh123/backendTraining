<?php
require_once("database.php"); 
if(isset($_GET['id'])) {
 $id = $_GET['id'];
 $state=$_GET['state'];
 //db();
//  global $link;
 $link=db();
//  if($state==1)$state=0;
//  else $state=1;
 $query = "update tasks set is_completed='$state' where id='$id'";
 $alterToDo = mysqli_query($link, $query);
     if($alterToDo){
             //echo successfully";
     }else{
             //echo mysqli_error($link);
     }
     mysqli_close($link);
     header("location:index.php");
     }
     
?>