<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Hostelites Record Deletion</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpg">
<link rel="shortcut icon" href="images/favicon.jpg">
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
       <form class="myform" action="emp_delete.php" method="POST"  >
<div >
<center><h3>Hostelite Record Deletion</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<br><label><b>Enter USERNAME whose Record wants to Delete:</b></label>
<br><INPUT name="username" TYPE="text" class="inputvalues" PLACEHOLDER="username" REQUIRED>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Delete"><br>
<br><a href="hostel.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Delete Button clicked") </script>';
	$username=$_POST['username'];
	$sql="DELETE FROM `h_address`  WHERE username='$username'";
	$queryrun=mysqli_query($con,$sql);
	if($queryrun)
	{
		echo '<script type="text/javascript"> alert("Delete Address Successfully...") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error in Address Deletion") </script>';
	}
	$sql1="DELETE FROM `login` WHERE username='$username'";
	$queryrun1=mysqli_query($con,$sql1);
	if($queryrun1)
	{
		echo '<script type="text/javascript"> alert("Delete login Successfully...") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error in Login Deletion") </script>';
	}
	$sql1="DELETE FROM `hostelites` WHERE username='$username'";
	$queryrun1=mysqli_query($con,$sql1);
	if($queryrun1)
	{
		echo '<script type="text/javascript"> alert("Delete Record Successfully...") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error in Record Deletion") </script>';
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