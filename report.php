<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Report Generator</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
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
<style>
table {
    border-collapse: separate;
    width: 100%;
border: 4px solid #000;
    text-align: left;
}
th{
background-color: #990028;
    color: white;
padding: 15px;
font-size: 25px;
}
td {
    padding-left:35px;
	color: #000000;
font-size: 20px;

}
form
{
	background-color:rgb(230,230,230);
	margin-right:5%;
	margin-left:5%;
	padding-right:10%;
}
</style>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div id="bgStretch"><img src="images/bg_body.jpg" alt=""></div>
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
<div  style="padding-left:25%;padding-right:25%;"><br>
<form  action="report.php" method="POST">
<br><br>
<h3 style="margin-left:10%;">Services Rating(out of 100):</h3><br>
<h4 style="margin-left:25%;"><table><tr><th>Mess Service:</th><th>Room Service</th><th>Manager Behaviour</th><th>Canteen Service</th></tr></h4>
<?php
	$q="SELECT COUNT(*) FROM `report`";
	$result = mysqli_query($con,$q);
	$row = mysqli_fetch_assoc($result);
	$size = $row['COUNT(*)'];
	$sql = "SELECT round(SUM(`mess_ser`)/'$size',0), round(SUM(`room_ser`)/'$size',0), round(SUM(`mangr_behv`)/'$size',0), round(SUM(`cantn_ser`)/'$size',0) FROM `report` ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
   		 // output data of each row
   		 while($row = $result->fetch_assoc()) {
	   		echo "<tr ><td>" . $row["round(SUM(`mess_ser`)/'$size',0)"]. "</td><td>" . $row["round(SUM(`room_ser`)/'$size',0)"]. "</td><td>" . $row["round(SUM(`mangr_behv`)/'$size',0)"]. "</td><td>" . $row["round(SUM(`cantn_ser`)/'$size',0)"]. "</td></tr>";
   		 }echo "</table>";
	} else {
   		echo "0 results";
	}
?>
<br><br>

<a href="manage.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>

<br><br>
</form>
</div>
<br><br>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> Hostel ManagementSystem &copy; 2008 | Privacy Policy | Design by:Maham Iftikhar</div>
    </div>
  </div>
</footer>
</body>
</html>