
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/venobox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign-in</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
    

 <section id="home">
  <div class="home-top">
  <div class="row">
    <div class="col-md-12">
      <div class="back-img">
       <img src="img/2.jpg" alt=""  width="100%">
          
 
<div class="loginbox">
<h1>Sign Up</h1>
<div class="sign-in">
<form action="signup.php" method="Post">
<p>Full Name</p>
<input type="text" name="name" placeholder="Enter full name">
<p>Username</p>
<input type="text" name="uname" placeholder="Enter username">
<p>Email</p>
<input type="text" name="email" placeholder="Enter email">

<p>Password</p>
<input type="Password" name="pass" placeholder="Enter password">
<p>Confirm Password</p>
<input type="Password" name="cpass" placeholder="Enter password again">
<p>Role</p>
  <select class="form-control" id="sel1" name="role">
        <option>Admin</option>
        <option>Teacher</option>
        
  </select>
<br>
<input type="submit" name="submit" value="Signup">

</form>
</div>
</div>
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


 <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
   <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/venobox.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
 <script >
     $(document).ready(function(){
    $('.venobox').venobox(); 
});
 </script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>


</body>
</html>