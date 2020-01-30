<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Employee Phone Number Updation</title>
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
       <form class="myform" action="emp_phoneno.php" method="POST" >
<div >
<center><h3>Employee Update Phone Number</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<br><label><b>Enter CNIC whose Phone Number wants to update:</b></label>
<br><INPUT name="cnic" TYPE="text" class="inputvalues" PLACEHOLDER="CNIC" REQUIRED>
<br><label><b>Phone Number</b></label>
<br><INPUT name="phonenumber" TYPE="text" class="inputvalues" PLACEHOLDER="PHONE NUMBER" REQUIRED>
<br><input name="submit_btn" type="submit" id="signup_btn" value="Update"><br>
<br><br><a href="emp_update.php"><input type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Update Button clicked") </script>';
	$phonenumber=$_POST['phonenumber'];
	$cnic=$_POST['cnic'];
	$sql="UPDATE `employee` SET `emp_pho_no`='$phonenumber'WHERE emp_cnic='$cnic'";
	$queryrun=mysqli_query($con,$sql);
	if($queryrun)
	{
		echo '<script type="text/javascript"> alert("Phone Number Updated Successfully...") </script>';
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