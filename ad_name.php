<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Admin Name Updation</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
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
       <form class="myform" action="ad_name.php" method="POST"  >
<div >
<center><h3>Admin Update Name</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<br><label><b>Enter Admin name whose name wants to Update</b></label>
<br><INPUT name="name" TYPE="text" class="inputvalues" PLACEHOLDER="Name" REQUIRED>
<br><label><b>Enter New Admin Name</b></label>
<br><INPUT name="new" TYPE="text" class="inputvalues" PLACEHOLDER="New Name" REQUIRED>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Update"><br>
<br><br><a href="ad_update.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	$admin=$_SESSION['Ad_name'];
	echo '<script type="text/javascript"> alert("Update Button clicked") </script>';
	$name=$_POST['name'];
	$new=$_POST['new'];
	if($admin == 'maham' AND $name<> 'maham')
	{
		$sql="UPDATE `admin` SET `Ad_name`='$new' WHERE Ad_name='$name'";
		$queryrun=mysqli_query($con,$sql);
		if($queryrun)
		{
			echo '<script type="text/javascript"> alert("Update Name Successfully...") </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Error") </script>';
		}
	}
	else if($name == 'maham')
	{
		echo '<script type="text/javascript"> alert("This Admin cannot be Updated from Record...") </script>';
	}
	else if($admin <> 'maham')
	{
		echo '<script type="text/javascript"> alert("This Admin cannot have Permissions to update this Record...") </script>';
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