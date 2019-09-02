<?php 
session_start();
if(isset($_SESSION['student_id'])&& $_SESSION['student_id']!="")
{
	
}
else
{
   header("location: login.php");
}

$inactive=10000000000;
if(isset($_SESSION['timeout']))
{
	$sessionttl=time()- $_SESSION['timeout'];
	if($sessionttl > $inactive)
	{
	session_destroy();
	header("location:logout.php");	
	}	
}
$_SESSION['timeout']=time();
?>