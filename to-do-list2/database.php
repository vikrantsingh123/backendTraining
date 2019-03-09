<?php
function db(){

    $link=mysqli_connect("127.0.0.1","root","goldtree9","todo");
    Echo mysqli_connect_error();
    return $link;    
}
if(db())
{
    //echo "success database connected";
}
else
{
    echo "failed";
}

?>
