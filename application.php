<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Registered Applicants</title>
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
        <nav>
          <ul class="sf-menu">
            <li><a href="ad_index.php">Admin Homepage</a></li>
	    <li class="current"><a href="application.php">Registered Applications</a></li>
            <li><a href="hostel.php">Hostellite's Record</a></li>
            <li><a href="employee.php">Employee's Record</a></li>
            <li><a href="admin.php">Admins Record</a></li>
            <li><a href="manage.php">Management</a></li>
          </ul>
        </nav>
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
          <h3 class="head1">Registered Applicants</h3> 
<?php
	$sql = "SELECT registration.first_name, registration.last_name, registration.username, registration.phone_number, registration.email,  r_address.r_house_no, r_address.r_street_no, r_address.r_city, r_address.r_country, r_address.r_zip_code FROM registration ,r_address WHERE registration.username=r_address.username ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
   		echo "<table><tr><th>Name</th><th>Username</th><th>Phone Number</th><th>Email</th><th>Address</th></tr>";
   		 // output data of each row
   		 while($row = $result->fetch_assoc()) {
	   		echo "<tr><td>" . $row["first_name"]. " " . $row["last_name"]. "</td><td>" . $row["username"]. "</td><td>" . $row["phone_number"]. "</td>
			<td>" . $row["email"]. "</td><td>" . $row["r_house_no"]. ", " . $row["r_street_no"]." ," . $row["r_city"].", " . $row["r_country"].", " . $row["r_zip_code"]. "</td></tr>";
   		} echo "</table>";
	} else {
   		echo "0 results";
	}
?>
<br><br><a href="appdetail.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Detail info..."/></a>
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

