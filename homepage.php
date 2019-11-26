<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
            $('.menu').click(function(){
              $('.ul').menuClass('active');  

            })

        })
        </script>
     
</head>
<body>
    <section>
    <header>
    <a href="#" class="uap"><img src="photos/uap.png" width="120" height="110"></a>
    <a href="#" class="menu">Menu</a>
    <ul class="">
    <li><a href="#">Home</a></li> 
    <li><a href="#">Course</a></li> 
    <li><a href="#">Resource</a></li> 
    <li><a href="#">Book</a></li> 
    <li><a href="#">Upload</a></li> 
    </ul>
    </header>
    </section>
</body>
</html>