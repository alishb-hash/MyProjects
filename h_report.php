<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Hostelites Report Submission</title>
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
       <form  action="h_report.php" method="POST" enctype="multipart/form-data" >
<div >
<center><h3>Report Submission</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<label><b>Mess Service:</b></label>
<br>
<select  name="cap" >
<strong><option>Mess Service:</option></strong>
<option value="0">0</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="30">30</option>
<option value="40">40</option>
<option value="50">50</option>
<option value="60">60</option>
<option value="70">70</option>
<option value="80">80</option>
<option value="90">90</option>
<option value="100">100</option>
</select>
<br><br><label><b>Room Service:</b></label>
<br>
<select  name="chair" >
<strong><option>Room Service:</option></strong>
<option value="0">0</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="30">30</option>
<option value="40">40</option>
<option value="50">50</option>
<option value="60">60</option>
<option value="70">70</option>
<option value="80">80</option>
<option value="90">90</option>
<option value="100">100</option>
</select>
<br><br><label><b>Manager Behaviour:</b></label>
<br>
<select  name="cupboards" >
<strong><option>Manager Behaviour:</option></strong>
<option value="0">0</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="30">30</option>
<option value="40">40</option>
<option value="50">50</option>
<option value="60">60</option>
<option value="70">70</option>
<option value="80">80</option>
<option value="90">90</option>
<option value="100">100</option>
</select>
<br><br><label><b>Canteen Service:</b></label>
<br>
<select  name="new" >
<strong><option>Canteen Service</option></strong>
<option value="0">0</option>
<option value="10">10</option>
<option value="20">20</option>
<option value="30">30</option>
<option value="40">40</option>
<option value="50">50</option>
<option value="60">60</option>
<option value="70">70</option>
<option value="80">80</option>
<option value="90">90</option>
<option value="100">100</option>
</select>
<br><br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Submit"><br>
<a href="Homepage.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Submit Button clicked") </script>';
	$name=$_SESSION['username'];
	$cap=$_POST['cap'];
	$chair=$_POST['chair'];
	$cupboards=$_POST['cupboards'];
	$bed=$_POST['new'];
	$sql1="INSERT INTO `report`(`username`, `mess_ser`, `room_ser`, `mangr_behv`, `cantn_ser`) VALUES ('$name','$cap','$chair','$cupboards','$bed')";
	$sql1run=mysqli_query($con,$sql1);
	if($sql1run)
	{
		echo '<script type="text/javascript"> alert("Submit Report Successfully...") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error...") </script>';
	}
}
?> 
<br><br>
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