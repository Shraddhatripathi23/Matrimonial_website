<?php
$host='localhost';
$user='root';
$password='';
$db='login';

$con=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['username']) && isset($_POST['password'])) {
	
	$username=$_POST['username'];
	$password=$_POST['password'];

$result= mysqli_query($con,"select * from users where username='".$username."' and password ='".$password."' limit 1");

	if(mysqli_num_rows($result)==1){
		header("Location:index.php");
		exit();
	}
	else{
		echo "Incorrect Login Id Or Password";
		exit();
	}
}
?>