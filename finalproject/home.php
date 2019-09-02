<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web development</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="logo">
<img src="  ./img/a.png">
</div>

<div class="main">
<nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="adduser.php">REGISTER</a></li>        
            <li><a href="#">About Us</a></li>        
            <li><a href="#">FAQS</a></li>        
    
        
        </ul>
        </nav>
    </div>
    <br>

<h1 style=" font-family: 'Impact" >Excel Training Skills and Career Center Inc.<br> Course Evaluation </h1>

<div class="jumbotron">
<form action="submit.php"  method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">

	function ValidateForm(form) {
		if (form.Instructorname.value == "") { alert('Instructor name is required.'); form.Instructorname.focus(); return false; }
		if (form.Course.value == "") { alert('Course  is required.'); form.Course.focus(); return false; }
		if (form.Schedule.value == "") { alert('Schedule  is required.'); form.Schedule.focus(); return false; }
		if (form.checkbox.value == "") { alert('Checkbox  is required.'); form.checkbox.focus(); return false; }
	return true; }

</script><br><br/>
 <h2 style="margin-left:30px">Evaluation Form</h2>
<br /><br><td>
<label for="Instructorname">Instructor Name:</label><br>
<select name="instructor"  maxlength="100" style="width: 300px; border:none; margin-left:30px" />
<option></option>
<option value="option">Sir Jonathan Estacio</option>
<option>Ma'am Sharon Cuneta</option>
<option>Ma'am Maliit na Bata</option>
</select>
</td>
<td>
<label for="date">Date:</label>
<input name="date" type="date"  maxlength="100" style="width: 300px; border:none;" />
</td><br>
<td>
<label for="Course">Course:</label>
<select name="course"  maxlength="100" style="width: 300px; border:none;" />
<option></option>
<option value="option">Web Development</option>
<option>Creative Web Design</option>
<option>Event Management Services Training</option>
<option>Trainers Methodology LVL 1 Training</option>
<option value="">Technical Drafting Assesment</option>
</select>
</td>
<td>
<label for="Schedule">Schedule:</label>
<select name="schedule"  maxlength="100" style="width: 300px; border:none;" />
<option></option>
<option value="option">Mon-Fir / 8am-5pm</option>
<option>Ma'am Sharon Cuneta</option>
<option>Ma'am Maliit na Bata</option>
</select>
</td><br>
    </form>
    </body>
    </html>
