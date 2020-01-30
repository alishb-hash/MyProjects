<?php
	require 'DBConfigure/config.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Dues Management</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpg">
<link rel="shortcut icon" href="images/favicon.jpg">
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
<div class="content"> 
<form class="myform" action="dues.php" method="POST">
      <br><br><br><center><img src="images/manage.jpg" alt="" class="img_inner fleft"></center>
        <center><h3>Dues </h3></center>
        <ul class="list2">

          <li><span> <center><a href="m_dues.php">Update Dues</a></center></span></li>
          <li><span><center><a href="m_update.php">Auto Dues Updation</a></center></span></li>
        </ul>
<br><br>
<a href="manage.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
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