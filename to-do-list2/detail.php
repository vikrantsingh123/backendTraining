<?php 
require_once "database.php";
if(isset($_GET['id'])) {
 $id = $_GET['id'];
 //db();
//  global $link;
$link=db();
 $query = "SELECT * FROM todo WHERE id = '$id'";
 $result = mysqli_query($link, $query);
 if(mysqli_num_rows($result)==1){
 $row = mysqli_fetch_array($result);
 if($row){
 $title = $row['todoTitle'];
 $is_completed = $row['is_completed'];
 $date = $row['date'];
echo "
 <h2>$title</h2>
 <h3>completed</h3>
 <p>$is_completed</p>
 ";
 }
 }else{
 echo 'no todo';
 }
}