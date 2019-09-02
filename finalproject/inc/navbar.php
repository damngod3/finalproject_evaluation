<?php

//$sql=mysqli_query($conn,"select student_id,firstname,lastname,username,password from users where student_id = 'student_id'")or die ("query 1 incorrect.......");

//list($student_id,$firstname,$lastname,$username,$password)=mysqli_fetch_array($sql);?>
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
<style type="text/css">
nav{
    width: 100%;
    height: 80px;
    background-color: #0009;
    
} 
  nav ul{
    float: left;
    list-style-type: none;
    margin-top: 15px;   
    margin-right: 30px;
}
nav ul li{
    display: inline-block;
   
}
nav ul li a{
    text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid #fff;
    transition: 0.6s ease;
}
nav ul li a:hover{
    background-color: #fff;
}
  nav a.logout{
  float: right;
   text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid #fff;
    transition: 0.6s ease;  
     list-style-type: none;
    margin-top: 15px;   
    margin-right: 30px;
}
.logout:hover{
   background-color: #fff;
}
</style>
  </head>
  <body>
  
 
<!--<nav class="navbar navbar-expand-lg navbar-light bg-primary">-->
  <nav>
        <ul>
            <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>index.php">HOME</a></li>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>adduser.php">REGISTER</a> </li>    
             <li><a class="nav-link" href="<?php echo ROOT_URL; ?>question.php">EVALUATION PAGE</a></li>
                          <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>student.php">MY ACCOUNT</a></li>

        
            
    
           </ul>

        <!-- <li>NAME:<strong><?php echo $username; ?></strong></li>-->
     
            <li><a  class="logout" href="<?php echo ROOT_URL; ?>login.php">LOGOUT</a></li>

      </li>    
        </nav>


        
 </body>
  </html>


