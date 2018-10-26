<?php include('serve.php');
    if(empty($_SESSION['name'])){
        header('location: login.php');
    }
?>

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
        <h2> Home Page  </h2>
    </div>  
    <div class="content">
        <?php if(isset($_SESSION['success'])): ?> 
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset( $_SESSION['success']);
                    ?>
                </h3>       
            </div>   
        <?php endif ?>

        <?php if(isset( $_SESSION['name'])) :?>
            <p> Welcome <strong><?php echo $_SESSION['name'] ?> </strong> </p>
            <p> <a href="index1.php?logout='1'" style="color:babyblue;">Logout</a> </p>
        <?php endif ?>    

    </div>
    
</body>
</html>