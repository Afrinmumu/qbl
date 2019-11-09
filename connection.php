<?php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="qbl";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if($conn)
{
 echo "connection established";
}
else{
    echo "connection failed";
    
}
?>