<?php
require_once("database.php"); 
if(isset($_GET['id'])) {
    $id1 = $_GET['id'];
   
     $link=db();
     //if($isChecked==true)$x=1;
     $query = "delete from tasks where id='$id1'";
     
     $deleteTodo = mysqli_query($link, $query);
     if($deleteTodo){
             //echo "Deleted successfully";
     }else{
             //echo mysqli_error($link);
     }
     mysqli_close($link);
     
    }
    header("location:index.php");
?>