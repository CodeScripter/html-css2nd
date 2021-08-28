<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<meta charset="utf-8">
	<title>Home page</title>
</head>
<body>
	<form name="StudentRegistration" method="post" action="reg.php">
		<div class="container">
			<center><h1>Student Registration Form</h1></center>

			<i class="fa fa-envelope"></i>
			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email">


			<label for = "name"><b>Name</b></label>
			<input type="text" placeholder="Enter name" name="name" id="name">

			<label for="fname"><b>Father name</b></label>
			<input type="text" placeholder="Enter Father's name" name="fname" id="fname"> 
		
			<label for="address"><b>Address</b></label>
	  		<input type="text" placeholder="Enter Address" name="address" id="address">
	  		
	  		<label for="gender"><b>Gender</b></label>
	  		<input type="radio" name="gender" value="male">Male
	  		<input type="radio" name="gender" value="Female">Female
	 
<!-- 	 		<br></b>
	 		<br></b>
			<label for="state"><b>State</b></label>
			<select Name="state" id="state">
			<option value="NULL" selected>select..</option>
			<option value="Raj">Rajasthan</option>
			<option value="Bih">Bihar</option>
			</select>
		
			
			<label for="city" class="city"><b>City</b></label>
			<select name="city" id="city">
			<option value="NULL" selected>select..</option>
			<option value="jodhpur">Jodhpur</option>
			<option value="jaipur">Jaipur</option>
			<option value="patna">Patna</option>
			</select>
			
			<br></b>
			<br></b>
			<label for="course"><b>Course</b></label>
			<select name="course" id="course">
			<option value="NULL" selected>select..</option>
			<option value="B.Tech">B.Tech</option>
			<option value="M.Tech">M.Tech</option>
			<option value="LLB">LLB</option>
			<option value="BCA">BCA</option>
			</select>
			
			<br></b>
			<br></b>
			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email">

			<br></b>
			<br></b>
			<label for="dob"><b>Date of birth</b></label>
			<input type="text" placeholder="yyyy-mm-dd" name="dob" id="dob">

			<br></b>
			<br></b>
			<label for="mob"><b>Mobile No.</b></label>
			<input type="text" placeholder="Enter Mobile No." name="mob" id="mob">
		 -->
			<br></b>
			<br></b>
			<button type="Submit" class="registerBtn"/>Register</button> 
		</div>
	</form>

	<center><button class="detailsBtn" type="Submit" ><a class="detailsBtn" href="studentDetails.php">Student Details</a></button></center>

</body>
</html>