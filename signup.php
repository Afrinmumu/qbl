
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
    


<div class="loginbox">
<h1>Sign Up</h1>
<form action="signup.php" method="Post">
<p>Username</p>
<input type="text" name="name" placeholder="Enter Username">
<p>Email</p>
<input type="text" name="email" placeholder="Enter email">

<p>Password</p>
<input type="Password" name="pass" placeholder="Enter password">
<p>Role</p>
<input type="text" name="role" placeholder="Enter role">
<br>
<input type="submit" name="submit" value="Signup">

</form>
</div>


<?php
include("connection.php");

 if($_POST['submit'])
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $role=$_POST['role'];
   
     
      if($name!="" && $email!="" && $pass!="" && $role!="")
      {
        $sql = "INSERT INTO LOGIN VALUES ('$name','$email','$password','$role')";
        $result = mysqli_query($conn,$sql);
          if($result)
          {
              echo "registerd successfully";
          }
          else
          {
              echo "error";
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