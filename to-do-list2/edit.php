<?php
require_once("database.php"); 
if(isset($_GET['id'])) {
 $id = $_GET['id'];
 //db();
//  global $link;
 $link=db();
 $query = "SELECT * FROM tasks WHERE id = '$id'";
 $result = mysqli_query($link, $query);
 if(mysqli_num_rows($result)==1){
 $row = mysqli_fetch_array($result);
 if($row){
 $title = $row['caption'];
 $is_completed = $row['is_completed'];
 $show_completed=false;
 if($is_completed==1)$show_completed=true;
 }
 }else{
 echo 'no todo';
 }
}
?>
<html>
<body>
<h1>Edit your task</h1>
<form method="get" action="update.php">
    <p>To do title</p>
    <input name="todoTitle" type="text"  required value="<?php echo $title ?>">
    <br><br>
    <span>isCompleted</span>
    <input type="checkbox" name="isChecked" <?php if($is_completed==1) echo 'checked="checked"';?>>
    <br><br>
    <input type="submit" name="submit" value="Edit">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
</form>
<a href="index.php">View all Todo</a>
</body>
</html>