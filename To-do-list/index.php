<?php
// Start the session
session_start();
?>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
   <body>
       <h1>Add Your Tasks</h1>
       <form name="myForm" action="add-item.php" method="POST">
    
Task:    <input type="text" name="task1" required>

<input type="submit">
</form>

<table class="table table-hover">

<thead>
<tr>
    <th>Tak</th>
    <th>Delete</th>
    <th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach($_SESSION[list1] as $value):?>
<tr>


     <td><?php echo $value;?></td> 
    <td><a href='delete.php?id=<?php echo $value ?>' role="button" class="btn">Delete</a></td>
    <td>
    <form name="myForm2" method="POST" action="edit.php" >
    
    Task:    <input type="text" name="tasknew" required>
    <input type="hidden" name="number" value='<?php echo $value ?>' />
    <input type="submit">
    </form>
    </td>

</tr>
<?php endforeach;?>
</tbody>
</table>
</body>
</html>
