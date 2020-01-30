<?php
require 'DBConfigure/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Contact</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/forms.js"></script>
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
<div id="bgStretch"><img src="images/spark2.jpg" alt=""></div>
<header>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <form id="search" action="contact.php" method="GET">
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
            <li><a href="login.php">Login</a></li>
            <li><a href="rules.php">Rules & Regulations</a></li>
            <li class="current"><a href="contact.php">Contact</a></li>
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
      <div class="content">
 <h3>Contact Us</h3>
          <form class="myform" action="contact.php" method="POST">
             <br><label><b>Name:</b></label>
	<INPUT name="name" TYPE="TEXT" class="inputvalues"  PLACEHOLDER="NAME" REQUIRED>
		<br><label><b>Email</b></label>
		<INPUT name="email" TYPE="email" class="inputvalues"  PLACEHOLDER="EMAIL" REQUIRED>
		<br><label><b>Phone Number</b></label>
		<INPUT name="phonenumber" TYPE="text" class="inputvalues" PLACEHOLDER="PHONE NUMBER" REQUIRED>
              <br><label><b>Message:</b></label>
		<INPUT name="msg" TYPE="TEXT" class="inputvalues"  PLACEHOLDER="MESSAGE" REQUIRED>
              <br><input style="background-color:#990028;color:white;" name="sub" type="submit" id="back_btn" value="Send">
                <div class="clear"></div>
          </form>
          <h3>Find Us</h3>
          <div class="map">
             <iframe  src="https://maps.google.com/maps?q=Ambreen%20Hostel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <div class="style1"><h3>Address:</h3><blockquote style="margin-left:20%;">Widgest Inc.<br>100 Money way,<br>400 West A City, Florida,32101<br>Tel: +97-42-35870192-6<br>
Fax: +97-42-35712637<br>
Email:<a style="text-decoration:none;color:red;"> 2015n4910@gmail.com</a><br>
<br>Helpline - <big>0900-10108</big><br>
(07:00am to 09:00pm)
</blockquote></div>
          </div>     
<?php
if(isset($_POST['sub']))
{
	echo '<script type="text/javascript"> alert("Send Button clicked") </script>';
	$msg=$_POST['msg'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pho=$_POST['phonenumber'];
	$sql="INSERT INTO `query`( `Name`, `Phone`, `Email`, `msg`) VALUES ('$name','$pho','$email','$msg')";
	$sql1run=mysqli_query($con,$sql);
	if($sql1run)
	{
		echo '<script type="text/javascript"> alert("Querry Submitted...We will be in touch soon") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error") </script>';
	}
}

?>
          <div class="style1"> Varden contact: <br>
            E-mail:&nbsp;<a href="#">bsef16a024@gmail.com</a> <br>
            Phone: 0092-348-7712345 </div>
        </div>
        <div class="clear"></div>
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