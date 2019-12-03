<!DOCTYPE html>
<html lang="en">
<style>
button
{
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  top: 120px;
  right: 600px;
  width: 100px;
}
    #pop
    {
      display:none;
      background:#fff;
      border:1px solid black;
      width:100%; 
      height:300px;
      position:absolute;
      
      
    }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    
</head>
<body>

  <button onclick="document.getElementById('pop').style.display='block'">click here</buttton>
  <div id="pop">
i am here
<li><a href="#">Course</a></li> 
    <li><a href="#">Resource</a></li> 
    <li><a href="#">Book</a></li> 
  </div>

</body>
</html>