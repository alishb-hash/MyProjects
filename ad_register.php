<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Employee Registration</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
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
 <body >
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
<form class="myform" action="ad_register.php" method="POST" >
<div >
<center><h3>Registration Form</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br><label><b>Username</b></label>
<br><input name="username" type="text" class="inputvalues" placeholder="Username" REQUIRED/>
<br><label><b>Password</b></label>
<br><input name="password" type="password" class="inputvalues" placeholder="Password" REQUIRED/>
<br><label><b>Confirm Password</b></label>
<br><input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" REQUIRED/>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Register"><br>
<br><br><a href="admin.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	$admin=$_SESSION['Ad_name'];
	echo '<script type="text/javascript"> alert("Register Button clicked") </script>';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	if($password==$cpassword)
	{
		if($admin == 'maham')
		{
			$query="select *  from admin Where Ad_name='$username' "; 
			$query_run=mysqli_query($con,$query);	
			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript"> alert("Admin already exists...Try another Admin name") </script>';
			}
			else
			{
				$sql="INSERT INTO `admin`(`Ad_name`, `Ad_password`) VALUES ('$username','$password')";
				$queryrun=mysqli_query($con,$sql);
				if($queryrun)
				{
					echo '<script type="text/javascript"> alert("Admin Registered Successfully...") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error in Admin Registring") </script>';
				}
			
			}
		}
		else if($admin <> 'maham')
		{
			echo '<script type="text/javascript"> alert("This Admin cannot have Permissions to Register Admin...") </script>';
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Password and Confirm password does not match...") </script>';
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