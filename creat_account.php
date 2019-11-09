<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    


<div class="loginbox">
<h1>Sign In</h1>
<form action="creat_account.php" method="Post">
<p>Username</p>
<input type="text" name="uname" placeholder="Enter Username">
<p>Password</p>
<input type="Password" name="upass" placeholder="Enter password">
<br>
<input type="submit" name="submit" value="login">
<br>
<a href="#">forgot password</a>
<br>
<a href="#">Create an account</a><br>
</form>
</div>


<?php

$uname=$_POST["uname"];
$upass=$_POST["upass"];
$submit=$_POST["submit"];


if($uname!="" && $upass!="")
{
    $query="INSERT INTO user_login VALUES('$uname','$upass')";
    $done=mysqli_query($conn,$query);

    if($done)
    {
    echo "<br>data inserted succesfully";
    }
    else{
        echo "error";
    }
    
}
else
{
    echo "<br>please fill the fileds";
}


?>

</body>
</html>