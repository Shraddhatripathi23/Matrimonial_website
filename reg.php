<?php
$host='localhost';
$user='root';
$password='';
$db='login';

$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['username'])) {
	
	$username=$_POST['username'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$nationality=$_POST['nationality'];

$result= mysqli_query($con,"insert into users (username,name,password,address,phone,dob,gender,nationality) values ('$username','$name','$password','$address','$phone','$dob','$gender','$nationality')");

	if(mysqli_num_rows($result)==1){
		header("Location:index.html");
		exit();
	}
	else{
		echo "Incorrect Login Id Or Password";
		exit();
	}
}
?>