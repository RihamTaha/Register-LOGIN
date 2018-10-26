<?php include('serve.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> User Register</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>

    <div class="header">
        <h2> Register  </h2>
    </div>  
    <form name="one" method="POST" action="register.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label>Name </label>
            <input type="text" name="name" value="<?php echo $username;?>">
        </div>
        <div class="input-group">
            <label>E-mail </label>
            <input type="text" name="email" value="<?php echo $email;?>">
        </div>
        <div class="input-group">
            <label>Password  </label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label>Confirm Password </label>
            <input type="password" name="Confirm-password" >
        </div>
        <div class="input-group">
            <label>Phone Number </label>
            <input type="tel" name="phone"value="<?php echo $phone;?>">
        </div>
        <div class="input-group">
            <label>Faculty/University </label>
            <input type="text" name="faculty"value="<?php echo $faculty;?>">
        </div>
            <div class="radio">
            <label>committee * </label><br><br>
           
            <input type="radio" name="committee" value="engineering">    engineering  <br>
            <input type="radio" name="committee" value="management">     management <br>

            <input type="radio" name="committee" value="juniors">   juniors <br>
            <input type="radio" name="committee" value="DCR">  DCR <br>
            <input type="radio" name="committee" value="logistics">  logistics <br>
            <input type="radio" name="committee" value="PR">    PR <br>

            <input type="radio" name="committee" value="marketing"> marketing <br>
            <input type="radio" name="committee" value="FR">    FR <br>
            <input type="radio" name="committee" value="HR">    HR <br>
            <input type="radio" name="committee" value="Q&D">   Q&D <br>

            <input type="radio" name="committee" value="publications">  publications <br>
            <input type="radio" name="committee" value="media"> media <br>
            <input type="radio" name="committee" value="IT">    IT <br>

        </div> 
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register </button>
        </div>

        <p style="font-size:15px;">Already have an account?<a href="login.php">Sign in </a> </p>


    </form>  

   


</body>
</html>