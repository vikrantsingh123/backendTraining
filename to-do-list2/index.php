<?php
require_once("database.php"); ?>
<html>
<head>
 <title>my todos</title>
</head>
<body>
<h2>
 My To Do List!!!
</h2>
<p><a href="create.php">add todo</a></p>
<p><a href="delete_whole.php">Delete whole Entries</a></p>
<?php
// db();
global $link;
$link = db();
$query = "SELECT id, caption, is_completed FROM tasks";
$result = mysqli_query($link, $query);
//check if there’s any data inside the table
if(mysqli_num_rows($result) >= 1){
 while($row = mysqli_fetch_array($result)){
 $id = $row['id'];
 $title = $row['caption'];
 $is_completed = $row['is_completed'];
//   $date = $row[‘date’];
?>
<ul>
 <li><a href="detail.php?id=<?php echo $id; ?>"><?php echo $title ." ".$is_completed?></a></li>
 </ul>
<?php
 }
}
?>
</body>
</html>