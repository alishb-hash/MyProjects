<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Hostelite Profile</title>
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
	margin-right:45%;
	margin-left:20%;
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
<div ><br>
<form  action="h_profile.php" method="GET">
<br><br>
<h3 style="margin-left:5%">Profile:</h3><br>
<center><img src="images/123.jpg" class="avatar"/></center>
<?php
	$name=$_SESSION['username'];
	$sql = "SELECT Hostelites.* , login.* FROM Hostelites,login where Hostelites.username=login.username AND login.username='$name'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) 
{
		echo "<table>";
   		 // output data of each row
   		 $row = $result->fetch_assoc();
		
	   	echo "<tr><td>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_fname"]. " " .$row['h_lname']."</td></tr>";
		echo "<tr><td>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["username"]. "</td></tr>";
		echo "<tr><td>Father Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_fathername"]. "</td></tr>";
		echo "<tr><td>Phone Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_pho_no"]. "</td></tr>";
		echo "<tr><td>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_email"]. "</td></tr>";
		echo "<tr><td>CNIC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_cnic"]. "</td></tr>";
		echo "<tr><td>DOB:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_DOB"]. "</td></tr>";
		echo "<tr><td>Blood Group:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row["h_blood_grp"]. "</td></tr>";
		$sql1 = "SELECT * from h_address where username='$name'";
		$result1 = $con->query($sql1);
		$row1 = $result1->fetch_assoc();
		echo "<tr><td>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>" . $row1["House_no"]. ", " . $row1["sreet_no"]." ," . $row1["city"].", " . $row1["country"].", " . $row1["zip_code"]. "</td></tr>";
		$sql2 = "SELECT room.*,hostelites.*,bed.* from Hostelites,room,bed where Hostelites.username='$name' AND Hostelites.h_room_id=room.room_id AND room.bed_id=bed.Bed_id";
		$result2 = $con->query($sql2);
		$row2 = $result2->fetch_assoc();
		echo "<tr><td>Room ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row2["room_id"]. "</td></tr>";
		echo "<tr><td>Bed Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row2["bed_type"]. "</td></tr>";
		echo "</table>";
}		
?>
<br><br><a href="Homepage.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
<input type="button" onclick="myFunction()" id="back_btn" value="Print" style="float:right;"/>

<script>
function myFunction() {
    window.print();
}
</script>

<br><br>
</form>
<br><br>
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