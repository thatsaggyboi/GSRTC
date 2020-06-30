<?php
 if(isset($_POST['search']))
 { 
	$id = $_POST['sr_no'];
    $con = mysqli_connect("localhost", "root", "Paras","pass_all");
    $q= "SELECT name,address,gender,dob,age,institute,inst_add,std,en_no,class,dis_src,dis_des,dt_from,dt_end,pass_type 
	FROM table1 WHERE sr_no= $id LIMIT 1";
    $r = mysqli_query($con,$q);
    if(mysqli_num_rows($r) > 0)
    {
      while ($row=mysqli_fetch_array($r))
      {
        $name=$row['name'];
		$address=$row['address'];
		$gender=$row['gender'];
		$dob=$row['dob'];
		$age=$row['age'];
		$institute=$row['institute'];
		$inst_add=$row['inst_add'];
		$std=$row['std'];
		$en_no=$row['en_no'];
		$class=$row['class'];
		$dis_src=$row['dis_src'];
		$dis_des=$row['dis_des'];
		$dt_from=$row['dt_from'];
		$dt_end=$row['dt_end'];
		$pass_type=$row['pass_type'];
      }  
    }
    else 
	{
        echo '<script>alert("Undifined ID")</script>';
        $name="";
		$address="";
		$gender="";
		$dob="";
		$age="";
		$institute="";
		$inst_add="";
		$std="";
		$en_no="";	
		$class="";
		$dis_src="";
		$dis_des="";
		$dt_from="";
		$dt_end="";
		$pass_type="";;
	}
	mysqli_free_result($r);
	mysqli_close($con);
 }
 else
 {
	$name="";
	$address="";
	$gender="";
	$dob="";
	$age="";
	$institute="";
	$inst_add="";
	$std="";
	$en_no="";
	$class="";
	$dis_src="";
	$dis_des="";
	$dt_from="";
	$dt_end="";
	$pass_type="";
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
		<title> Your Data </title>
	</head>
	<body>
			<h3 id= "title" style="color: white">GSRTC PASS FORM</h1>
			<h3 id= "title" style="color: white">(Student's Concessional Bus Pass Application)</h1>
			<h3 id= "title" style="color: white">To be filled in Block letters</h1>
			<table>
				<tr>
					<th>Name</th>
					<td><?php echo $name;?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?php echo $address;?></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td><?php echo $gender;?></td>
				</tr>
				<tr>
					<th>Date Of Birth</th>
					<td><?php echo $dob;?></td>
				</tr>
				<tr>
					<th>Your Age is</th>
					<td><?php echo $age;?></td>
				</tr>
				<tr>
					<th>Institute</th>
					<td><?php echo $institute;?></td>
				</tr>
				<tr>
					<th>Institue Address</th>
					<td><?php echo $inst_add;?></td>
				</tr>
				<tr>
					<th>Standard</th>
					<td><?php echo $std;?></td>
				</tr>
				<tr>
					<th>Enrollment</th>
					<td><?php echo $en_no;?></td>
				</tr>
				<tr>
					<th>Class</th>
					<td><?php echo $class;?></td>
				</tr>
				<tr>
					<th>Distance Source</th>
					<td><?php echo $dis_src;?></td>
				</tr>
				<tr>
					<th>Distance Destination</th>
					<td><?php echo $dis_des;?></td>
				</tr>
				<tr>
					<th>Date From</th>
					<td><?php echo $dt_from;?></td>
				</tr>
				<tr>
					<th>Date End </th>
					<td><?php echo $dt_end;?></td>
				</tr>
				<tr>
					<th>Pass Type</th>
					<td><?php echo $pass_type;?></td>
				</tr>
			</table>
		</form>
	</body>
</html>