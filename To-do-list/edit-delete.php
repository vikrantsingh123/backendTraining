<?php
session_start();
$a=$_GET['id'];

if (isset($a)) {
    $key=array_search($a,$_SESSION['list1']);
    if($key!==false)
    unset($_SESSION['list1'][$key]);
    $_SESSION["list1"] = array_values($_SESSION["list1"]);
    header("location:index.php");
} 

