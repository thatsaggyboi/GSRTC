<?php


$con=mysqli_connect('localhost','root','Paras'); 
  mysqli_select_db($con,'pass_all');

 $name=$_POST['name'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $institute=$_POST['institute'];
 $inst_add=$_POST['inst_add'];
 $std=$_POST['std'];
 $en_no=$_POST['en_no'];
 $class=$_POST['class'];
 $dis_src=$_POST['dis_src'];
 $dis_des=$_POST['dis_des'];
 $dt_from=$_POST['dt_from'];
 $dt_end=$_POST['dt_end'];
 $pass_type=$_POST['pass_type'];
 $file=(file_get_contents($_FILES["myfile"]["tmp_name"]));
 $type = "jpeg";
 $dt = 'data:image/' . $type . ';base64,' . base64_encode($file);
 
 $q="insert into pass_details (name,address,gender,dob,institute,inst_add,std,en_no,class,dis_src,dis_des,dt_from,dt_end,pass_type,p_photo) 
  values('$name','$address','$gender','$dob','$institute','$inst_add','$std',$en_no,'$class','$dis_src','$dis_des','$dt_from','$dt_end','$pass_type','$dt')";
 $status=mysqli_query($con,$q);

?>


<html lang="en" dir="ltr">
	<head>
	<style>
	body {
		font-size: 20 px;
		text-align: center; 
		background-color: maroon;
		color: white;
	}

	h1 {
		font-size: 40px;
		text-align: center; 
		color: white;
	} 
</style>
	<link rel="stylesheet" href="navstyle.css">
   	<link rel="icon" href="https://imgur.com/tKqip2U.jpg" type="image/x-icon">
      <meta charset="utf-8">
    <title>Thank you!!!</title>
  </head>
	<body>
		<h1>GSRTC PASS</h1>
		
		<ul class="topnav">
        <li><a href="home.php">Home</a></li>
        <li><a href="Login.php">Verifier Login</a></li>
        <li class="right"><a href="https://gsrtc.in/site/downloads/innerPages/aboutus.html">About</a></li>
		</ul>
		
		<p><?php 
			 if($status==1) 
				echo '<script>alert("Record Inserted")</script>';
		     else 
				echo '<script>alert("An error occurred!!!")</script>';
			
			if ($status==1) {
			$lastid = mysqli_insert_id($con); 
    echo  "Form submitted successfully. Your registration number is " .$lastid ;
} else {
    echo "Error: " . $q . "<br>" . $con->error;
}
 mysqli_close($con);
			
			?>
			</p>
		
		Do you want to fill another form? Then <a href="pass.php">click Here</a>
	</body>
</html>