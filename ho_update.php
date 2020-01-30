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
<br><br<br><br><br<br><br>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header> 
<div id="TMGPrototype2">
  <ul class='sets'>
    <li data-setName="Hostelites Update Record">
      <ul>
       <li data-srcPreview="images/spark1.jpg">
          <div>
            <div class="content"> <img src="images/up
.jpg" alt="" style="float:left;"><br><br><br><br><br><br><br><br><br><br><br>
 <ul class="list2">
       <li><span><center><a href="ho_password.php">Change Hostelite Password</a></center></span></li>
	<li><span><center><a href="ho_dues.php">Submit Dues</a></center></span></li>
       <li><span> <center><a href="ho_fascility.php">Change Hostelites Fascilities </a></center></span></li>
        </ul>
   <form class="myform" action="emp_delete.php" method="POST"  >   

<br><a href="hostel.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
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
      <div class="copy"> Hostel Management System &copy; 2008 | Privacy Policy | Design by:Maham Iftikhar</div>
    </div>
  </div>
</footer>
</body>
</html>