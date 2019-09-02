<?php
	require('config/config.php');
	require('config/db.php');
	
	//Check submit
	 if(isset($_POST['submit'])){
	 	//Get Form data	 	$emailErr="";
	 	$username = mysqli_real_escape_string($conn, $_POST['username']);
	 	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	 	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	 	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);

		//creating studentid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$student_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		 //Query
		 $sql = "INSERT INTO users(student_id,username, firstname, lastname, password, email) VALUES('$student_id','$username', '$firstname', '$lastname', '$password', '$email')";
		 if(mysqli_query($conn,$sql)){
			$_SESSION['success'] = 'Student added successfully';
		
		
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: adduser.php');
	

}
	
?>
	<?php include('inc/header.php'); ?>
	<div class="jumbotron">
		<h1 style="font-family: 'Roboto'">REGISTER</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" >  
				</div>
				<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" >
				</div>			
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control">
				</div>
			<div class="form-group"> 
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control">
				</div>
			
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
				</div>
			<br>
			<input type="submit" name="submit" value="REGISTER" class="btn btn-primary">
		</form>
	</div>
<?php include('inc/footer.php'); ?>





