<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 120px;
  right: 600px;
  width: 100px;
}
.btn cancel
{

}
h1
{
  position:center;
  top: 80px;
  left: 600px;
  width: 400px;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 700px;
  padding: 100px;
  background-color: white;
}




/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  right: 600px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  right: 600px;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
    <title>qbl</title>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
            $('.menu').click(function(){
              $('.ul').menuClass('active');  

            })

        })
        </script>
<link rel="stylesheet" type="text/css" href="css/style2.css">
     
</head>
<body>
    <section>
    <header>
    <a href="#" class="uap"><img src="photos/uap.png" width="120" height="110"></a>
    <a href="#" class="menu">Menu</a>
    <ul class="">
    <li><a href="http://localhost:8080/qbl/qbl/homepage.php">Home</a></li> 
    <li><a href="#">Course</a></li> 
    <li><a href="#">Resource</a></li> 
    <li><a href="#">Book</a></li> 
    <li><a href="http://localhost:8080/qbl/qbl/creat_account.php">Upload</a></li> 
    </ul>
    </header>
   
 <button class="open-button" onclick="openForm()">Click here</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
   
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</section>
</body>
</html>