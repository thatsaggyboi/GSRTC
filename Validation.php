<?php
 session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 $con=mysqli_connect('localhost','root','Paras');
 mysqli_select_db($con,'logindb');
 $q="select * from user where username='$username' && password='$password'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if($num==1)
 {
	$_SESSION['username']=$username;
	header('location:s.html');
 }
 else
 {
    $_SESSION['message']="Invalid username or password";
	header('location:Login.php');
 }
?>