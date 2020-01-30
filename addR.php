<?php
require 'DBConfigure/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Add Room</title>
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
       <form  action="addR.php" method="POST"  >
<div >
<center><h3>Add Room</h3></center>
<center><img  src="images/123.jpg" class="avatar"/></center>
<br>
<label><b>Capacity</b></label>
<br>
<select  name="cap" >
<strong><option>Capacity</option></strong>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<br><br><label><b>Chairs</b></label>
<br>
<select  name="chair" >
<strong><option>Chairs</option></strong>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<br><br><label><b>Cupboards</b></label>
<br>
<select  name="cupboards" >
<strong><option>Cupboards</option></strong>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<br><br><label><b>Bed Type:</b></label><br>
<?php
	$sql1 ="SELECT `Bed_id`, `bed_type` FROM `bed` ";
	$result = mysqli_query($con,$sql1);
?>
<select name='new'>
<?php while ($rs = mysqli_fetch_assoc($result)) {
	$id=$rs['Bed_id'];
	$type=$rs['bed_type'];
        echo '<option value="'.$id.'">'.$type.'</option>';
}
?>
</select>
<br><input name="submit_btn" type="submit" id="signup_btn" value="Add"><br>
<a href="room.php"><input type="button" id="back_btn" value="Back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	echo '<script type="text/javascript"> alert("Add Button clicked") </script>';
	$cap=$_POST['cap'];
	$chair=$_POST['chair'];
	$cupboards=$_POST['cupboards'];
	$bed=$_POST['new'];
	$sql1="INSERT INTO `room`( `capacity`, `occupaid`, `chairs`, `cupboards`, `bed_id`) VALUES ('$cap',0,'$chair','$cupboards','$bed')";
	$sql1run=mysqli_query($con,$sql1);
	if($sql1run)
	{
		echo '<script type="text/javascript"> alert("Add Room Successfully...") </script>';
		$sql2="SELECT vacating from vacate";
		$vacate = mysqli_fetch_row(mysqli_query($con, $sql2));
		$vacate[0]=$vacate[0]+$cap;
		$sql3="SELECT id from vacate";
		$v = mysqli_fetch_row(mysqli_query($con, $sql3));
		$sql="UPDATE `vacate` SET`vacating`='$vacate[0]' WHERE id=$v[0]";
		$sqlrun=mysqli_query($con,$sql);
	}
	else
	{
		echo '<script type="text/javascript"> alert("Error...") </script>';
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