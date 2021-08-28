<?php
$con = mysqli_connect('localhost', 'root', 'Beniwal3@$','testing');
// print_r($con);
// get the post records
if(isset($_POST['name'])){ 
$name = $_POST['name'];
$fname = $_POST['fname'];
$addr = $_POST['address'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$city = $_POST['city'];
$course = $_POST['course'];
$mail = $_POST['email'];
$DOB = $_POST['dob'];
$mobile = $_POST['mob'];


// database insert SQL code
$sql = "INSERT INTO `students` (`name`, `father_name`, `address`, `gender`, `state`, `city`, `course`, `email`, `DOB`, `mobile_no`) VALUES ('$name', '$fname', '$addr', '$gender', '$state', '$city', '$course', '$mail', '$DOB', '$mobile')";


// print_r($sql);
// insert in database 
$rs = mysqli_query($con, $sql);
}
$sql1 = "SELECT * FROM `students` WHERE mobile_no = '9413257506'";
$result = mysqli_query($con, $sql1);
 while($row = mysqli_fetch_assoc($result))  {
	$name1 = $row['name'];
	$fname1 = $row['father_name'];
	$addr1 = $row['address'];
	$gender1 = $row['gender'];
	$state1 = $row['state'];
	$city1 = $row['city'];
	$course1 = $row['course'];
	$mail1 = $row['email'];
	$dob1 = $row['DOB'];
	$mob1 = $row['mobile_no'];
    }
// print_r($name1);