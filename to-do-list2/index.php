<?php
require_once("database.php"); ?>
<html>
<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="java_script.js"></script>
    </head>
</head>
<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<body>
<h2>
 My To Do List!!!
</h2>
<p><a href="create.php">add todo</a></p>
<p><a href="delete_whole.php">Delete whole Entries</a></p>

<table class="table table-hover">
<thead>
<tr>
<th>Tasks</th>
<th>Completed</th>
<th>Delete</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
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
 $show_completed='not completed';
 if($is_completed==1)$show_completed='completed';
//   $date = $row[‘date’];
?>
<tr>
 <td <?if($is_completed==1) echo 'style="text-decoration:line-through;color:grey; font-style: italic" ';?> ><?php echo $title;  ?></td>
 
 <td><?php echo  $show_completed;?>
 <form method="get" action="checkbox_check.php">
 <input type="checkbox" name="isChecked" id="<?php echo $id?>" 
 onclick="check(<?php echo $id?>)" <?php if($is_completed==1) echo 'checked="checked"';?>>
 <input type="hidden" name="completed">
 </form>
 </td>
 <td><a href="delete.php?id=<?php echo $id; ?>">Delete</a>
 <td><a href="edit.php?id=<?php echo $id; ?>">Edit</a>
 </tr>
<?php
 }
}
?>
</tbody>
</body>
</html>