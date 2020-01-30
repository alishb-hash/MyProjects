<?php
require 'DBConfigure/config.php';
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Management</title>
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
        <nav>
          <ul class="sf-menu">
            <li ><a href="ad_index.php">Admin Homepage</a></li>
	    <li><a href="application.php">Registered Applications</a></li>
            <li><a href="hostel.php">Hostellite's Record</a></li>
            <li><a href="employee.php">Employee's Record</a></li>
            <li><a href="admin.php">Admins Record</a></li>
            <li class="current"><a href="manage.php">Management</a></li>
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
      <div class="content"> <br><br><img src="images/manage.jpg" alt="" class="img_inner fleft">
        <center><h3>Management</h3></center>
<br><br>
        <ul class="list2">
<br><br><br>
          <li><span> <center><a href="query.php">View Queries</a></center></span></li>
          <li><span><center><a href="report.php">View Report</a></center></span></li>
	  <li><span><center><a href="dues.php">Adjust Dues</a></center></span></li>
	  <li><span><center><a href="room.php">Room Record</a></center></span></li>
	  <li><span><center><a href="fascility.php">Fascilities Record</a></center></span></li>
        </ul>
<br><br>
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