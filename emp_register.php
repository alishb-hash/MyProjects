<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Employee Registration</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
<link rel="stylesheet" href="css/style.css">
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
<link rel="stylesheet" href="css/style1.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div id="bgStretch"><img src="images/spark1.jpg" alt=""></div>
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
<div class="content_wrapper">
  <div class="container_12">
    <div class="grid_9">
      <div class="content"> 
        
<br><br>
       <form class="myform" action="emp_register.php" method="POST" >
<div >
<center><h3>Employee Registration Form</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<br><label><b>First Name</b></label>
<br><INPUT name="fname" TYPE="TEXT" class="inputvalues" PLACEHOLDER="FIRST NAME" REQUIRED>
<br><label><b>Last Name</b></label>
<br><INPUT name="lname" TYPE="TEXT" class="inputvalues"  PLACEHOLDER="LAST NAME" REQUIRED>
<br><label><b>Email</b></label>
<br><INPUT name="email" TYPE="email" class="inputvalues"  PLACEHOLDER="EMAIL" REQUIRED>
<br><label><b>Phone Number</b></label>
<br><INPUT name="phonenumber" TYPE="text" class="inputvalues" PLACEHOLDER="PHONE NUMBER" REQUIRED>
<br><label><b>Salary</b></label>
<br><INPUT name="salary" TYPE="text" class="inputvalues" PLACEHOLDER="Salary" REQUIRED>
<br><label><b>CNIC #</b></label>
<br><INPUT name="cnic" TYPE="text" class="inputvalues" PLACEHOLDER="CNIC" REQUIRED>
<br><label><b>House No.</b></label>
<br><INPUT name="houseno" TYPE="TEXT" class="inputvalues" PLACEHOLDER="House No" REQUIRED>
<br><label><b>Street No.</b></label>
<br><INPUT name="streetno" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Street No" REQUIRED>
<br><label><b>City</b></label>
<br><INPUT name="city" TYPE="TEXT" class="inputvalues" PLACEHOLDER="City" REQUIRED>
<br><label><b>Country</b></label>
<br><INPUT name="country" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Country" REQUIRED>
<br><label><b>Zip Code</b></label>
<br><INPUT name="zipcode" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Zip COde" REQUIRED>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Register"><br>
<br><br><a href="employee.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
date_default_timezone_set('UTC');
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Sign Up Button clicked") </script>';
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$salary=$_POST['salary'];
	$phonenumber=$_POST['phonenumber'];
	$cnic=$_POST['cnic'];
	$houseno=$_POST['houseno'];
	$streetno=$_POST['streetno'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$hiredate= date("Y-m-d");
	$sql="INSERT INTO `employee`(`Emp_fname`, `Emp_lname`, `emp_email`, `emp_cnic`, `emp_pho_no`, `emp_sal`, `emp_hiredate`) 
				VALUES ('$fname','$lname','$email','$cnic','$phonenumber','$salary','$hiredate')";
	$queryrun=mysqli_query($con,$sql);
	$sql1="INSERT INTO `e_address`(`emp_cnic`, `e_house_no`, `e_street_no`, `e_city`, `e_country`, `e_zip_code`)
				VALUES ('$cnic','$houseno','$streetno','$city','$country','$zipcode') ";
	$sql1run=mysqli_query($con,$sql1);
	if($sql1run)
	{
		echo '<script type="text/javascript"> alert("Address saved...") </script>';
		if($queryrun)
		{
		echo '<script type="text/javascript"> alert("Employee Registered Successfully...") </script>';
		}
		else
		{
		echo '<script type="text/javascript"> alert("Error") </script>';
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error") </script>';
	}
	

}
?> 
      </div>
    </div>
  </div>
</div>
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