<?php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="qbl";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if($conn)
{
 echo "connection done";
}
else{
    echo "connection failed";
    
}
?>