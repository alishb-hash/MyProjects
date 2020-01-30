<?php
	session_start();
	require 'DBConfigure/config.php';

?>
<!doctype html>
<html lang="en">
<head>
<title>Hostel Management System | Admin Login</title>
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
<link rel="stylesheet" href="css/style1.css">
<script>
$(document).ready(function () {
    $('#bgStretch')
        .bgStretch({
            align: 'leftTop'
        })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div id="bgStretch"><img src="images/spark2.jpg" alt=""></div>
<header>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <br><br><br>
  </div>
</header>
<div class="content_wrapper">
  <div class="container_12">
    <div class="grid_9">
      <div class="content"> 
<div>
<center><h3>Admin Login</h3></center>
<center><img src="images/123.jpg" class="avatar"/></center>
<form class="myform" action="ad_login.php" method="POST">
<label><b>Username</b></label>
<br><input name="username" type="text" class="inputvalues" placeholder="Enter Username"/>
<br><br><label><b>Password</b></label>
<br><input name="password" type="password" class="inputvalues" placeholder="Enter Password"/>
<br><br><input style="background-color:#990028;color:white;" name="login" type="submit" id="login_btn" value="Login"/>
<br><a href="login.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="select 	* from admin WHERE Ad_name='$username' AND Ad_password= '$password' ";
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			$row=mysqli_fetch_assoc($query_run);
			$_SESSION['Ad_name']=$row['Ad_name'];
			header('location:ad_index.php');
		}
		else
		{
			echo '<script type="text/javascript"> alert("Invalid Credentials...") </script>';
		}
	}
?>
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

