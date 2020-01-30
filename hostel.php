<?php
	require 'DBConfigure/config.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Hostelite Record</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/TMGPrototype2.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/TMGPrototype2.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<link rel="stylesheet" href="css/style1.css">
<script>
$(window).load(function () {
    $('#TMGPrototype2').TMGPrototype2({});
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <nav>
          <ul class="sf-menu">
            <li ><a href="ad_index.php">Admin Homepage</a></li>
	    <li><a href="application.php">Registered Applications</a></li>
            <li class="current"><a href="hostel.php">Hostellite's Record</a></li>
            <li><a href="employee.php">Employee's Record</a></li>
            <li><a href="admin.php">Admins Record</a></li>
            <li><a href="manage.php">Management</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div id="TMGPrototype2">
  <ul class='sets'>
    <li data-setName="Hostelite's Record">
      <ul>
       <li data-srcPreview="images/spark1.jpg">
          <div>
            <div class="content"> <img src="images/hostel1.jpg" alt="" style="float:left;"><br><br><br><br><br><br><br><br><br><br><br>
 <ul class="list2">
       <li><span><center><a href="ho_update.php">Update Hostelite </a></center></span></li>
       <li><span> <center><a href="ho_detail.php">Hostelites Detail </a></center></span></li>
       <li><span><center><a href="ho_delete.php">Delete Hostelite </a></center></span></li>
        </ul>
            </div>
          </div>
        </li>
      </ul>
    </li>
  </ul>
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