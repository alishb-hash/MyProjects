<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Hostelites Record</title>
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
<div ><br>
<form  action="ho_detail.php" method="POST">
<br><br>
<h3 style="margin-left:5%">Detail Info of Hostelites:</h3><br>

<h4 style="margin-left:10%;"><table><tr><th>Name</th><th>Username</th><th>Password</th><th>Phone Number</th><th>Email</th><th>CNIC</th><th>Address</th></tr></h4>
<?php
	$sql = "SELECT Hostelites.*, login.*, h_address.* From Hostelites, login, h_address where Hostelites.username=login.username AND login.username=h_address.username ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		
   		 // output data of each row
   		 while($row = $result->fetch_assoc()) {
	   		echo "<tr><td>" . $row["h_fname"]. " " . $row["h_lname"]. "</td><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td>
			<td>" . $row["h_pho_no"]. "</td><td>" . $row["h_email"]. "</td><td>" . $row["h_cnic"]. "</td><td>" . $row["House_no"]. ", " . $row["sreet_no"]." ," . $row["city"].", " . $row["country"].", " . $row["zip_code"]. "</td></tr>";
   		 }echo "</table>";
	} else {
   		echo "0 results";
	}
?>
<br><br>

<a href="ho_eachH.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Detail Info Of Hostelites" style="margin-left:60%;"/></a>
<a href="hostel.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
<br><br>
</form>
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