<?php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="qbl";
$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if($conn)
{
 echo "";
}
else{
    echo "connection failed";
    
}
?>