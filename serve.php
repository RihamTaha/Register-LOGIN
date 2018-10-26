<?php
    session_start();
    $username="";
    $email="";
    $phone="";
    $faculty="";
    $committee="";
    $errors=array();

    $db=mysqli_connect('localhost','root','','registration');
    if(isset($_POST['register'])) 
     {
        $username=mysql_real_escape_string($_POST['name']);
        $email=mysql_real_escape_string($_POST['email']);
        $password_1=mysql_real_escape_string($_POST['password']);
        $confrim_password=mysql_real_escape_string($_POST['Confirm-password']);
        $phone=mysql_real_escape_string(trim($_POST['phone']));
        $faculty=mysql_real_escape_string($_POST['faculty']);
        if(!empty($_POST['committee']))
        {
           // $committee=mysql_real_escape_string($_POST['committee']);
              $committee=$_POST['committee'];
        }
     
     if(empty($username))
     {
         array_push($errors ,"Name is Required");
     }

     if(empty($email))
     {
         array_push($errors ,"e-mail is Required");
     }
     if(empty($password_1))
     {
         array_push($errors ,"password is Required");
     }

    if($password_1!= $confrim_password)
     {
         array_push($errors ,"The Two Passwords aren't matched!!");
     }

     if(is_null($phone))
     {
         array_push($errors ,"phone is Required");
     }
     if(empty($faculty))
     {
         array_push($errors ,"faculty is Required");
     }
     if(empty($committee))
     {
         array_push($errors ,"committee is Required");
     }
     if(count($errors)==0)
     {
        $password=md5($password_1);
         $query="INSERT INTO users (name,email,password,phone,university,committee)
          VALUES('$username','$email','$password','$phone','$faculty','$committee') ";

        mysqli_query($db,$query);
        $_SESSION['name']=$username;
        $_SESSION['success']="You are now logged in";
        header('location: index1.php');
    }
}


//login
    if(isset($_POST['login']))
    {
        
        $username=mysql_real_escape_string($_POST['name']);
        $password=mysql_real_escape_string($_POST['password']);
        
     if(empty($username))
     {
         array_push($errors ,"Name is Required");
     }

   
     if(empty($password))
     {
         array_push($errors ,"password is Required");
     }

     if(count($errors)==0)
     {
         $password=md5($password);
         $query="SELECT * FROM users WHERE name='$username' AND password='$password'" ;
         $result= mysqli_query($db,$query);
         if(mysqli_num_rows($result) == 1)
         {
            $_SESSION['name']=$username;
            $_SESSION['success']="You are now logged in";
            header('location: index1.php');
         }else{
             array_push($errors,"In correct Name or password!!");
         }

    } 
   
   }

//logout
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['name']);
        header('location: login.php');
    }


?>