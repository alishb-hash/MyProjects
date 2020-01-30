<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Login</title>
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
        <form id="search" action="login.php" method="GET">
          <input type="text" name="s">
          <a onClick="document.getElementById('search').submit()"></a>
          <div class="clear"></div>
        </form>
         <div class="socials"> <a href="https://twitter.com/HostelBookers"></a> <a href="https://www.facebook.com/groups/thehostelworkers/"></a> <a href="https://plus.google.com/+DwellHostel-tw"></a> <a href="https://piazza.com/careers/dashboard#/company_profile/qualcomm"></a> </div>
        <nav>
          <ul class="sf-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li class="current"><a href="login.php">Login</a></li>
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
      <div class="content"> <br><br><br><br><br><br><br><br><img src="images/111.jpg" alt="" class="img_inner fleft">
        <center><h3>Login Page</h3></center>
<br><br>
        <ul class="list2">

          <li><span> <center><a href="ad_login.php">Admin Login </a></center></span></li>
          <li><span><center><a href="h_login.php">Hostelites Login </a></center></span></li>
        </ul>
<br><br><br><br>
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