<?php
session_start();
$a=$_POST["tasknew"];
$b=$_POST["number"];
if (isset($b)) {
    $key=array_search($b,$_SESSION['list1']);
    if($key!==false)
    $_SESSION['list1'][$key]=$a;
    //$_SESSION["list1"] = array_values($_SESSION["list1"]);
    header("location:index.php");
}
// if( $a ) {
//     if(empty($_SESSION[list1])) 
//     $_SESSION[list1]=array();
//     array_push($_SESSION[list1],$a);
    
//         header("location:index.php");
       exit(); 
// }
   ?>