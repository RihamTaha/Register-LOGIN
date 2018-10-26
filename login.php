<?php include('serve.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>

    <div class="header">
        <h2> Login  </h2>
    </div>  
    <form name="one" method="POST" action="#">
         <?php include('errors.php');?>
        <div class="input-group">
            <label>Name </label>
            <input type="text" name="name">
        </div>
       
        <div class="input-group">
            <label>Password  </label>
            <input type="password" name="password">
        </div>  
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login </button>
        </div>

        <p  style="font-size:15px; text-align:left;" >Not a  memeber?<a href="register.php">Sign Up </a> </p>


    </form>  

   


</body>
</html>