<?php
require_once("database.php"); ?>
<html>
<head>
<title>Create to do Application</title>
</head>
<body>
<h1>Create to do list</h1>
<form method="post" action="create.php">
    <p>To do title</p>
    <input name="todoTitle" type="text" required>
    <br><br>
    <span>isCompleted</span>
    <input type="checkbox" name="isChecked" value="false" >
    <br><br>
    <input type="submit" name="submit" value="add">
    
</form>
<a href="index.php">View all Todo</a>
</body>
</html>
<?php
 if(isset($_POST['submit'])) {
 $title = $_POST['todoTitle'];
 $isChecked = $_POST['isChecked'];
//   echo 'you filled title ' . $title . "<br> and description " . $description;
     $link=db();
     echo "$isChecked";
     $x=0;
     if($isChecked==true)$x=1;
     $query = "INSERT INTO tasks(caption, is_completed) 
      VALUES ('$title', '$x')";
     $insertTodo = mysqli_query($link, $query);
     if($insertTodo){
             echo "successfully";
     }else{
             echo mysqli_error($link);
     }
     mysqli_close($link);
     }
?>