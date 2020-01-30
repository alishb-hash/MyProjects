<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Registered Applicants</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style1.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/bgStretch.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
$(document).ready(function () {
    $('#bgStretch')
        .bgStretch({
            align: 'leftTop'
        })
});
</script>
<style>
table {
    border-collapse: separate;
    width: 100%;
border: 4px solid #000;
    text-align: left;
}
th{
background-color: #990028;
    color: white;
padding: 15px;
font-size: 25px;
}
td {
    padding-left:35px;
	color: #000000;
font-size: 20px;

}

tr:hover 
{
          background-color: #C0C0C0;
}
form
{
	background-color:rgb(230,230,230);
	margin-right:5%;
	margin-left:5%;
	padding-right:10%;
}
</style>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div id="bgStretch"><img src="images/bg_body.jpg" alt=""></div>
<header>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <br><br><br>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div ><br>
<form  action="appdetail.php" method="POST">
<br><br>
<h3 style="margin-left:5%">Detail Info of Registered Applicants:</h3><br>

<h4 style="margin-left:10%;"><table><tr><th>Name</th><th>Username</th><th>password</th><th>CNIC</th><th>Blood Group</th><th>Joining Date</th><th>Phone Number</th><th>Email</th><th>Address</th></tr></h4>
<?php
	$sql = "SELECT registration.first_name, registration.last_name, registration.username, registration.password, registration.cnic, registration.blood_group, registration.DOB, registration.phone_number, registration.email,  r_address.r_house_no, r_address.r_street_no, r_address.r_city, r_address.r_country, r_address.r_zip_code FROM registration ,r_address WHERE registration.username=r_address.username ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
   		 // output data of each row
   		 while($row = $result->fetch_assoc()) {
	   		echo "<tr ><td>" . $row["first_name"]. " " . $row["last_name"]. "</td><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td><td>" . $row["cnic"]. "</td><td>" . $row["blood_group"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["phone_number"]. "</td>
			<td>" . $row["email"]. "</td><td>" . $row["r_house_no"]. ", " . $row["r_street_no"]." ," . $row["r_city"].", " . $row["r_country"].", " . $row["r_zip_code"]. "</td></tr>";
   		 }echo "</table>";
	} else {
   		echo "0 results";
	}
?>
<br><br>

<input style="background-color:#990028;color:white;margin-left:60%;" name="aprove" type="submit" id="back_btn" value="Approve" />
<a href="application.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>

<?php
	if(isset($_POST['aprove']))
	{
		echo '<script type="text/javascript"> alert("Approve Button clicked") </script>';
		$sql3="SELECT MAX(reg_id) from registration";
		$Maxreg = mysqli_fetch_row(mysqli_query($con, $sql3));
		$sql4="SELECT MIN(reg_id) from registration";
		$Minreg = mysqli_fetch_row(mysqli_query($con, $sql4));
		while($Minreg[0]<$Maxreg[0])
		{
			$sql="SELECT sum(occupaid) from room";
			$ocupy = mysqli_fetch_row(mysqli_query($con, $sql));
			$sql1="SELECT vacating from vacate";
			$vacate = mysqli_fetch_row(mysqli_query($con, $sql1));
			$sql2="SELECT MIN(room_id) from room where occupaid<capacity";
			$room= mysqli_fetch_row(mysqli_query($con, $sql2));
			if($ocupy<$vacate)
			{
				$query="SELECT `username`, `password`, `first_name`, `last_name`, `father_name`, `email`, `phone_number`, `cnic`, `blood_group`, `gender`, `DOB`, `photo` FROM `registration` WHERE reg_id=$Minreg[0]";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					$row=mysqli_fetch_assoc($query_run);
					$username=$row['username'];
					$password=$row['password'];
					$fname=$row['first_name'];
					$lname=$row['last_name'];
					$father=$row['father_name'];
					$email=$row['email'];
					$phone=$row['phone_number'];
					$cnic=$row['cnic'];
					$blood=$row['blood_group'];
					$gender=$row['gender'];
					$DOB=$row['DOB'];
					$pic=$row['photo'];
					$query1="SELECT `r_house_no`, `r_street_no`, `r_city`, `r_country`, `r_zip_code` FROM `r_address` WHERE username = '$username' ";
					$queryrun=mysqli_query($con,$query1);
					$row1=mysqli_fetch_assoc($queryrun);
					$house=$row1['r_house_no'];
					$street=$row1['r_street_no'];
					$city=$row1['r_city'];
					$country=$row1['r_country'];
					$zip=$row1['r_zip_code'];
					$run="INSERT INTO `hostelites`(`h_lname`, `h_fname`, `h_pho_no`, `h_blood_grp`, `h_DOB`, `h_cnic`, `h_fathername`, `h_email`,`username`, `h_room_id`) 
						VALUES ('$lname','$fname','$phone','$blood','$DOB','$cnic','$father','$email','$username','$room[0]')";
					$query2=mysqli_query($con,$run);
					if($query2)
					{
						$run1="INSERT INTO `h_address`(`username`, `House_no`, `sreet_no`, `city`, `country`, `zip_code`) 
							VALUES ('$username','$house','$street','$city','$country','$zip')";
						$query3=mysqli_query($con,$run1);
						if($query3)
						{
							//echo $username;
							//echo$password;
							$run2="INSERT INTO `login`(`username`, `password`, `h_photo`) VALUES ('$username','$password','$pic')";
							$query4=mysqli_query($con,$run2);
							if($query4)
							{
								echo '<script type="text/javascript"> alert("Hostellites Registered Successfully...") </script>';
								$sql5="SELECT  `occupaid` FROM `room` WHERE room_id='$room[0]' ";
								$room1= mysqli_fetch_row(mysqli_query($con, $sql5));
echo $room1[0];
								$room1[0]=$room1[0]+1;

echo $room1[0];
echo $room[0];
								$q1="UPDATE `room` SET `occupaid`='$room1[0]' WHERE room_id='$room[0]'";
								$qrun=mysqli_query($con,$q1);
								if($qrun)
								{
									echo '<script type="text/javascript"> alert("Update Room Info...") </script>';
								}
								$sql6="DELETE FROM `registration` WHERE username='$username'";
								$q2=mysqli_query($con,$sql6);
								if($q2)
								{
									echo '<script type="text/javascript"> alert("Delete Registration Info...") </script>';
								}
								$sql7="DELETE FROM `r_address` WHERE username='$username'";
								$q2=mysqli_query($con,$sql6);
								if($q2)
								{
									echo '<script type="text/javascript"> alert("Delete Address Info...") </script>';
								}
							}
							else
							{
								echo '<script type="text/javascript"> alert("Login Error in Hostelites Registring") </script>';
							}
						}
						else
						{
							echo '<script type="text/javascript"> alert("Address Error in Hostelites Registring") </script>';
						}
					}
					else
					{
						echo '<script type="text/javascript"> alert("Hostelites Error in Hostelites Registring") </script>';
					}
				
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Hostel Full No More Space is Available") </script>';
			}
			$Minreg[0]=$Minreg[0]+1;
		}
	}

?>


<br><br>

</form>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> Hostel ManagementSystem &copy; 2008 | Privacy Policy | Design by:Maham Iftikhar</div>
    </div>
  </div>
</footer>
</body>
</html>