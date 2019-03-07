<?php
// Start the session
session_start();
?>
<html>
   <body>
       <h1>Add Your Tasks</h1>
       <form name="myForm" action="add-item.php" method="GET">
    
Task:    <input type="text" name="task1" required>

<input type="submit">
</form>

<?php
    foreach( $_SESSION[list1] as $value ) {
        echo "$value <br />";
     }
   ?>
</body>
</html>

