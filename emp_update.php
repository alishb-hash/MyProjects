<?php
	require 'DBConfigure/config.php';
	session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Employee Record Updation</title>
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
      <div class="content"><br><br><img src="images/emp.jpg" alt="" class="img_inner fleft">
        <center><h3>Employee Record Updation</h3></center>
<br><br><br><br>
        <ul class="list2">
	  <li><span> <center><a href="emp_email.php">Change Email</a></center></span></li>
	<li><span> <center><a href="emp_salary.php">Change Salary</a></center></span></li>
          <li><span><center><a href="emp_address.php">Change Address</a></center></span></li>
	  <li><span> <center><a href="emp_phoneno.php">Change Phone Number</a></center></span></li>
        </ul>
       <form class="myform" action="emp_register.php" method="POST"  >
<br><br><a href="employee.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<br><br>
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