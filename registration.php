<?php
require 'DBConfigure/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Registration</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
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
        <form id="search" action="registration.php" method="POST">
          <input type="text" name="s">
          <a onClick="document.getElementById('search').submit()"></a>
          <div class="clear"></div>
        </form>
        <div class="socials"> <a href="https://twitter.com/HostelBookers"></a> <a href="https://www.facebook.com/groups/thehostelworkers/"></a> <a href="https://plus.google.com/+DwellHostel-tw"></a> <a href="https://piazza.com/careers/dashboard#/company_profile/qualcomm"></a> </div>
        <nav>
          <ul class="sf-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li class="current"><a href="registration.php">Registration</a></li>
            <li ><a href="login.php">Login</a></li>
            <li><a href="rules.php">Rules & Regulations</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
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
       <form  action="registration.php" method="POST" >
<div >
<center><h3>Registration Form</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<label><b>Username</b></label>
<br><input name="username" type="text" class="inputvalues" placeholder="Username" REQUIRED/>
<br><label><b>Password</b></label>
<br><input name="password" type="password" class="inputvalues" placeholder="Password" REQUIRED/>
<br><label><b>Confirm Password</b></label>
<br><input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" REQUIRED/>
<br><label><b>First Name</b></label>
<br><INPUT name="fname" TYPE="TEXT" class="inputvalues" PLACEHOLDER="FIRST NAME" REQUIRED>
<br><label><b>Last Name</b></label>
<br><INPUT name="lname" TYPE="TEXT" class="inputvalues"  PLACEHOLDER="LAST NAME" REQUIRED>
<br><label><b>Father Name</b></label>
<br><INPUT name="fathername" TYPE="TEXT" class="inputvalues"  PLACEHOLDER="FATHER NAME" REQUIRED>
<br><label><b>Email</b></label>
<br><INPUT name="email" TYPE="email" class="inputvalues"  PLACEHOLDER="EMAIL" REQUIRED>
<br><label><b>Phone Number</b></label>
<br><INPUT name="phonenumber" TYPE="text" class="inputvalues" PLACEHOLDER="PHONE NUMBER" REQUIRED>
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
<br><DIV class="inputvalues">
<br><label><b>Blood Group</b></label>
<br>
<select  name="bloodgroup" >
<strong><option>Blood Group</option></strong>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
<br>
<span><b>Gender</b></span>
<br><input name="gender" type="radio"  value="male" checked Required>
<label><b>Male</b></label>
<br><input  name="gender" type="radio" value="female" required>
<label><b>Female</b></label>
<br><input type="checkbox" REQUIRED>I Accept the Terms and Coonditions of Hostel
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Register"><br>
<br><br><a href="index.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Register Button clicked") </script>';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$fathername=$_POST['fathername'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$cnic=$_POST['cnic'];
	$bloodgroup=$_POST['bloodgroup'];
	$gender=$_POST['gender'];
	$houseno=$_POST['houseno'];
	$streetno=$_POST['streetno'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$date= date("Y-m-d");
	if($password==$cpassword)
	{
		$query="select *  from registration Where username='$username' "; 
		$query_run=mysqli_query($con,$query);	
		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript"> alert("Username already exists...Try another username") </script>';
		}
		else
		{
			$sql1="INSERT INTO r_address (username, r_house_no, r_street_no, r_city, r_country, r_zip_code) 
							VALUES ('$username','$houseno','$streetno','$city','$country','$zipcode') ";
					$sql1run=mysqli_query($con,$sql1);
			
				if($sql1run)
				{
					
					echo '<script type="text/javascript"> alert("Address saved...") </script>';
					
					$sql2="INSERT INTO `registration`(username,password,first_name,last_name,father_name,email,phone_number,cnic,blood_group,gender,DOB) VALUES   ('$username','$password','$fname','$lname','$fathername','$email','$phonenumber','$cnic','$bloodgroup','$gender','$date')";
					$run=mysqli_query($con,$sql2);
					if($run)
					{
						echo '<script type="text/javascript"> alert("User Registered Successfully...") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error in Registration") </script>';
						$sql7="DELETE FROM `r_address` WHERE username='$username'";
					$sn=mysqli_query($con,$sql7);
					}
				}
				else
				{
					echo '<script type="text/javascript"> alert("Address not Saved...") </script>';
				}
			
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Password and Confirm password does not match...") </script>';
	}


}
?> 
<br><br><br><br>
      </div>
    </div>
  </div>
</div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> Hostel Management System &copy; 2008 | Privacy Policy | Design by:Maham Iftikhar</div>
    </div>
  </div>
</footer>
</body>
</html>