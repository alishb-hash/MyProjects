<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Remove Fascility</title>
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
       <form  action="removeF.php" method="POST" >
<div >
<center><h3>Remove Fascility</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<br><label><b>Fascility Name:</b></label><br>
<?php
	$sql1 ="SELECT  Due_id,due_name FROM `dues` ";
	$result = mysqli_query($con,$sql1);
?>
<select name='new'>
<?php while ($rs = mysqli_fetch_assoc($result)) {
	$id=$rs['Due_id'];
	$name=$rs['due_name'];
        echo '<option value="'.$id.'">'.$name.'</option>';
}
?>
</select>
<br>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Remove"><br>
<br><br><a href="fascility.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	$due=$_POST['new'];
	echo '<script type="text/javascript"> alert("Remove Button clicked") </script>';
	$query="SELECT `due_id`, `username`, `submission_date`, `status` FROM `hostel_dues` WHERE due_id='$due' "; 
	$query_run=mysqli_query($con,$query);	
	if(mysqli_num_rows($query_run)>0)
	{
		echo '<script type="text/javascript"> alert("Fascility cannot be removed because this is taken by some Hostelites...") </script>';
	}
	else{
		$query1="DELETE FROM `dues` WHERE due_id='$due'"; 
		$queryrun=mysqli_query($con,$query1);	
		if($queryrun)
		{
			echo '<script type="text/javascript"> alert("Remove Fascility Successfully") </script>';
		}
		
		else
		{
			echo '<script type="text/javascript"> alert("Error...") </script>';
		}
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