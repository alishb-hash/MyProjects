<?php
require 'DBConfigure/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Add Fascility</title>
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
       <form  action="addF.php" method="POST" enctype="multipart/form-data" >
<div >
<center><h3>Add Fascility</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<label><b>Fascility Name:</b></label>
<br><input name="due" type="text" class="inputvalues" placeholder="Fascility Name" REQUIRED/>
<br><label><b>Charges</b></label>
<br><INPUT name="charge" TYPE="TEXT" class="inputvalues" PLACEHOLDER="Charges" REQUIRED>
<br><label><b>Due Fine:</b></label>
<br><INPUT name="fine" TYPE="TEXT" class="inputvalues"  PLACEHOLDER="Due Fine" REQUIRED>
<br>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Add"><br>
<br><br><a href="fascility.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Add Button clicked") </script>';
	$due=$_POST['due'];
	$charge=$_POST['charge'];
	$fine=$_POST['fine'];
		$query="INSERT INTO `dues`(`due_name`, `charges`, `due_fine`) VALUES ('$due','Scharge','$fine')"; 
		$query_run=mysqli_query($con,$query);	
		if($query_run)
		{
			echo '<script type="text/javascript"> alert("Add Fascility Successfully") </script>';
		}
		
	else
	{
		echo '<script type="text/javascript"> alert("Error...") </script>';
	}


}
?> 
<br><br><br><br>
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