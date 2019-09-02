<?php

include('config/config.php');
	require('config/db.php');


if(isset($_POST['submit'])){
	 
		//evaluation
	header("location: question.php");
	$stu_id = $_REQUEST['stu_id'];
	$tech_id = $_REQUEST['tech_id'];
	$sub_id = $_REQUEST['sub_id'];
		


		$sql=mysqli_query($conn,"select * from question")or die ("query 2 incorrect.......");
	while(list($questionid,$qname)=mysqli_fetch_array($sql))
	{
		$mysqli_query=$_POST['radio'.$questionid];
		mysqli_query($conn,"INSERT INTO `evaluation`(`stu_id`,`tech_id`,`sub_id`, `question`, `eval_ans`,comments) VALUES ('$stu_id','$tech_id','$sub_id','$questionid','$eval_ans','$comment')") or die (mysqli_error($conn));
/*
if(isset($_POST['submit']))
{
    
    header("location: home.php");
  	$stu_id = $_REQUEST['stu_id'];
	$tech_id = $_REQUEST['tech_id'];
	$sub_id = $_REQUEST['sub_id'];

	$abc1=mysqli_query($connection,"select * from question")or die ("query 2 incorrect.......");
	while(list($question_id,$qname)=mysqli_fetch_array($abc1))
	{
		$evl_val=$_POST['radio'.$question_id];
		mysqli_query($connection,"INSERT INTO `evaluation`(`stu_id`,`tech_id`,`sub_id`, `question`, `eval_ans`) VALUES ('$stu_id','$tech_id','$sub_id','$question_id','$evl_val')") or die (mysqli_error($connection));

	}

// mysqli_query($connection,"INSERT INTO `evaluation`(`stu_id`, `tech_id`, `sub_id`, `question`, `eval_ans`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])") or die (mysqli_error($connection));
header("location:select_teacher.php");
// mysqli_close($connection);*/
	header('location: question.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Questions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <style type="text/css">
 	body{
 		min-width: 1200px;
 	}
 </style>
</head>
<body>
<?php include('inc/header.php');?>
<form action="question.php" name="form" method="post" class="form-horizontal">
<div class="container-fluid">
<div class="row">


<!-- Menu -->
<div class="clearfix"></div>

<h1 style=" font-family:'Times New Roman', Times, serif ; margin-left:240px">Excel Training Skills and Career Center Inc.</h1><h1 style=" font-family:'Times New Roman', Times, serif ; margin-left:440px"> Course Evaluation </h1>
    <hr>
<i style="font-size:20px; font-family:'Times New Roman', Times, serif ; margin-left:240px" class="text-info">Please let us know how we can serve you better. Kindly check your answer for each of the given questions.</i>



<div class="row">
<div class="col-sm-12">
<table class="table table-hover table-border" style="width:auto; margin:0 auto" >
<tr bgcolor="#CCCCCC">
<hr style="width: 900px;">	
<h1 style="font-family:'Times New Roman', Times, serif ;  margin-left: 130px;">INSTRUCTOR</h1>
<th> No.</th>
<th>Questions</th>
<th>Poor</th></a>
<th>Good</th>
<th>Excellent</th>
<th>None</th>
</tr>

<!------------ FOR INSTRUCTOR QUESTIONS -------------->
<?php 
$sql=mysqli_query($conn,"select * from question")or die ("query 2 incorrect.......");
while(list($questionid,$qname)=mysqli_fetch_array($sql))
{ ?>
<tr>
<td><?php echo $questionid; ?></td>
<td><?php echo $qname; ?> </td>

<td><input type="radio" name="radio<?php echo $questionid;?>" value="1" required></td>
<td><input type="radio" name="radio<?php echo $questionid;?>" value="2" required></td>
<td><input type="radio" name="radio<?php echo $questionid;?>" value="3" required></td>
<td><input type="radio" name="radio<?php echo $questionid;?>" value="4" required></td>
</tr>



<?php } ?>
<input type="hidden" name="stu_id" value="<?php echo $_REQUEST['stu_id']?>">
<input type="hidden" name="tech_id" value="<?php echo $_REQUEST['tech_id']?>">
<input type="hidden" name="sub_id" value="<?php echo $_REQUEST['sub_id']?>">




</table>
<div class="row">
<div class="col-sm-12">
<table class="table table-hover table-border" style="width:1100px; margin:0 auto" >
<tr bgcolor="#CCCCCC">

<br>
<hr style="width: 1100px;">
<h1 style="font-family:'Times New Roman', Times, serif ;  margin-left: 130px;">TRAINING</h1>

<th> No.</th>
<th>Questions</th>
<th>Poor</th>
<th>Good</th>
<th>Excellent</th>
<th>None</th>
</tr>

<!---------------- FOR TRAINING QUESTIONS -------------->
<?php 
$sql=mysqli_query($conn,"select * from question2")or die ("query 2 incorrect.......");
while(list($question2id,$qname2)=mysqli_fetch_array($sql))
{ ?>
<tr>
<td><?php echo $question2id; ?></td>
<td><?php echo $qname2; ?> </td>

<td><input type="radio" name="radio<?php echo $question2id;?>" value="1" required></td>
<td><input type="radio" name="radio<?php echo $question2id;?>" value="2" required></td>
<td><input type="radio" name="radio<?php echo $question2id;?>" value="3" required></td>
<td><input type="radio" name="radio<?php echo $question2id;?>" value="4" required></td>
</tr>



<?php } ?>

   

</table>

<hr style="width: 1100px;">
<br>	
<div class="clearfix"></div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="container">
<div class="form-group">
<textarea class="form-control" name ="comment" style="width:500px ; height:100px ; margin-left:350px;" placeholder="NEED YOUR COMMENT"></textarea>

    </div>
</div>	
</div>
</div>



<button class="btn btn-large  btn-primary" type="submit" name="submit" id="submit"  style="margin-left:500px">Submit
</button>
    
<button class="btn btn-large  btn-danger" type="reset" name="reset" id="reset"  style="margin-left:50px">Reset
</button>



</div>
</div>
</div>	
</div>
</div>		</div>
</div>
</form>
</body>
</html>
<br>
<br>
