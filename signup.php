
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    

 <section id="home">
  <div class="home-top">
  <div class="row">
    <div class="col-md-12">
      <div class="back-img">
       <img src="img/1.jpg" alt=""  width="100%">
          
 
<div class="loginbox">
<h1>Sign In</h1>
<div class="sign-in">
  <form action="creat_account.php" method="Post">
<p>Username</p>
<input type="text" name="uname" placeholder="Enter Username">
<p>Password</p>
<input type="Password" name="upass" placeholder="Enter password">
<p>Role</p>
  <select class="form-control" id="sel1" name="role">
        <option>Admin</option>
        <option>Teacher</option>
        
  </select>
<br>
<input type="submit" name="submit" value="Login">
<br>
<div class="f-pass">
<a href="#">Forgot password?</a>
</div>
<div class="c-acc">
<a href="signup.html">Create an account</a><br>
</div>
</form>
</div>

</div>
        </div>
        
  
    </div>
    

  </div>
  
</section>


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
           header("location:upload_file.php");
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