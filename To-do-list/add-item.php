<?php
session_start();
$a=$_GET["task1"];
if( $a ) {
    if(empty($_SESSION[list1])) 
    $_SESSION[list1]=array();

    array_push($_SESSION[list1],$a);
    
        header("location:index.php");
    //   exit(); 
}
   ?>