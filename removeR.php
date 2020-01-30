<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Remove Room</title>
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
       <form  action="removeR.php" method="POST"  >
<div >
<center><h3>Remove Room</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<label><b>Room ID</b></label>
<br>
<?php
	$sql1 ="SELECT `room_id` FROM `room`";
	$result = mysqli_query($con,$sql1);
?>
<select name='new'>
<option value="">Room id</option>
<?php while ($rs = mysqli_fetch_assoc($result)) {
	$id=$rs['room_id'];
        echo '<option value="'.$id.'">'.$id.'</option>';
}
?>
</select>
<br><input style="background-color:#990028;color:white;" name="submit_btn" type="submit" id="signup_btn" value="Remove"><br>
<a href="room.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Remove Button clicked") </script>';
	$id=$_POST['new'];
$sql="SELECT  `occupaid` FROM `room` WHERE room_id='$id'";
$ocupy = mysqli_fetch_row(mysqli_query($con, $sql));
	if($ocupy[0]=0)
	{
		echo '<script type="text/javascript"> alert("Remove Room Successfully...") </script>';
	$sql1="DELETE FROM `room` WHERE room_id='$id'";
	$sql1run=mysqli_query($con,$sql1);
	if($sql1run)
	{
		echo '<script type="text/javascript"> alert("Remove Room Successfully...") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error...") </script>';
	}
}
else
	{
		echo '<script type="text/javascript"> alert("Hostelites Lived in this Room You cannot remove it...") </script>';
	}

}
?> 
<br><br>
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