<html>
<head>
<title>Create to do Application</title>
</head>
<body>
<h1>Create to do list</h1>
<form method="post" action="index.php">
    <p>To do title</p>
    <input name="todoTitle" type="text">
    <p>To do description</p>
    <input name="todoDescription" type="text">
    <br>
    <input type="submit" name="submit" value="add">
    
</form>
</body>
</html>
<?php
 if(isset($_POST[‘submit’])) {
 $title = $_POST[‘todoTitle’];
 $description = $_POST[‘todoDescription’];
//  echo “you filled title “ . $title . “<br> and description “ . $description;
 }
 ?>