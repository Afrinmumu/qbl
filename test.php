<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="test.php" method ="Post">
Num1: <input type="number" name="n1">
<br>
Num2: <input type="number" name="n2">
<br>
<input type="textbox" name="op">
<br>
<input type="submit">

</form>
    <?php

  $n1=$_POST["n1"];
  $n2=$_POST["n2"];
  $op=$_POST["op"];
  if($op=="+")
  {
      $z= $n1+$n2;
  }
  else if($op=="-")
  {
      $z= $n1-$n2;
  }
  else if($op=="*")
  {
      $z= $n1*$n2;
  }
  else if($op=="/")
  {
      $z= $n1/$n2;
  }

  echo "Answer is $z  <br>";
    
   $a="hello world";
   echo strlen($a);
echo "<br>";
   $b=array(3,5,6,3,3,4,5);
   echo count($b);

   ?>
   <?php
   include "photo.php";
   ?>

</body>
</html>