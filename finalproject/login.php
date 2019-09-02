<?php
   include("config/config.php");
   session_start();
  

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $student_id = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
    
      $sql = "SELECT id FROM users WHERE student_id = '$student_id' and password = '$password'";
      $result = mysqli_query($conn, $sql);
      $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {

         $_SESSION['student_id'] = $student_id;
          
         header("location: student.php");
      }else {
     echo  $msg ='<script> alert ("Invalid Username or Password")</script>';
  }   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-family: 'lato', 'sans-serif';
        min-height: 100vh;
    }
    .container{
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after;{
        margin-left: 200px;
        transform-origin: -2oopx 50%;
        transition-delay: 0s;
    }
    .container:hover .center, .container:active .center{
        opacity:1;
        transition-delay: 0.2s;
    }
    .top:before , .top:after, .bottome:before, .bottom:after{
        content:'';
        position: absolute;
        display: block;
        width: 200vmax;
        height: 200vmax;
        top: 50%;
        left: 50%;
        margin-top: -100vmax;
        transform-origin: 0 50%;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        z-index: 10;
        opacity: 0.65;
        transition-delay: 0.2s;
    }
    .top:before{
        transform: rotate(45deg);
        background-color: #e46569;
    }
    .top:after{
        transform: rotate(135deg);
        background-color: #ecaf81;
    }
    .bottom:before{
        transform: rotate(-45deg);
        background-color: #e46569;
    }
    .bottom :after{
        transform: rotate(-135deg);
        background-color: #ecaf81;
    }
    .center{
        position: absolute;
        width: 400px;
        height: 400px;
        left: 50%;
        top: 50%;
        margin-left: -200px;
        margin-top: -200px;
        display: flex;
        justify-content: center;
        align-items:center;
        flex-direction: column;
        opacity: 0;
        box-shadow: 0 0 25px;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        transition-delay:0s;
        color: #333;
        background-color: rgba(0, 0, 0, 0.9);
        z-index:9999;
    }
    .center input{
        width: 50%;
        padding: 15px 0;
        margin: 10px 0;
        border: none;
        color: #fff;
        outline:none;
        border-bottom: 2px solid #fff;
        background-color: transparent;
        text-transform: uppercase;
    }
    .center h2{
        color: #fff;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    .center .button{
        border: 2px solid transparent;
        outline: none;
        width: 50%;
        padding: 14px 0;
        background-color: #7e87cf;
        color: #fff;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: bold;
        margin-top: 20px;
        cursor: pointer;
        transition: 0.5s all;
    }
    .center .button:hover{
        background-color: transparent;
        border: 2px solid #7e87cf;
        letter-spacing: 4px;
    }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="container">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
        
            <h2>SIGN IN</h2>
            <input type="text" name="username" placeholder="Student ID">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" class="button" value="Sign In">
            </div>

    
    </div>
</body>
</html> 