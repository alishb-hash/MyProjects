<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Employee Address Updation</title>
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
<script type="text/javascript">
	function PreviewImage(){
		var oFReader=new FileReader();
		oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

		oFReader.onload=function(oFREvent){
			document.getElementById("uploadPreview").src=oFREvent.target.result;
		};
	};

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
        
<br><br>
       <form class="myform" action="emp_address.php" method="POST"  >
<div >
<center><h3>Employee Update Address</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<br><label><b>Enter CNIC # whose record wants to update:</b></label>
<br><INPUT name="cnic" TYPE="text" class="inputvalues" PLACEHOLDER="CNIC" REQUIRED>
<br><label><b>House No.</b></label>
<br><INPUT name="houseno" TYPE="TEXT" class="inputvalues" PLACEHOLDER="House No" REQUIRED>
<br><label><b>Street No.</b></label>
<br><INPUT name="streetno" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Street No" REQUIRED>
<br><label><b>City</b></label>
<br><INPUT name="city" TYPE="TEXT" class="inputvalues" PLACEHOLDER="City" REQUIRED>
<br><label><b>Country</b></label>
<br><INPUT name="country" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Country" REQUIRED>
<br><label><b>Zip Code</b></label>
<br><INPUT name="zipcode" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Zip COde" REQUIRED>
<br><input name="submit_btn" type="submit" id="signup_btn" value="Update"><br>
<br><br><a href="emp_update.php"><input type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Update Button clicked") </script>';
	$cnic=$_POST['cnic'];
	$houseno=$_POST['houseno'];
	$streetno=$_POST['streetno'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$zipcode=$_POST['zipcode'];
	$sql1="UPDATE `e_address` SET `e_house_no`='$houseno',`e_street_no`='$streetno',`e_city`='$city',`e_country`='$country',`e_zip_code`='$zipcode' WHERE emp_cnic='$cnic' ";
	$sql1run=mysqli_query($con,$sql1);
	if($sql1run)
	{
		echo '<script type="text/javascript"> alert("Address Update Successfully...") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error") </script>';
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