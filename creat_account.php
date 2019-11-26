
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
<a href="http://localhost:8080/qbl/qbl/signup.php">Create an account</a><br>
</form>
</div>


<?php
include("connection.php");

if($_POST['submit'])
{

    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
   
    if($uname!="" && $upass!="")
    {
    $sql = "SELECT * FROM LOGIN WHERE 'username' = '$uname' AND 'password' = '$upass' ";
      $result = mysqli_query($conn,$sql);
     
      if ($result)
       {
           header("location:test.php");
           echo "logged in";

       }
       else
       {
           echo "failed";
       }
        }
        else
        {
            echo "please fill the fields";
        }
   
        }


?>

</body>
</html>