<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | User Queries</title>
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
<form  action="query.php" method="POST">
<br><br>
<h3 style="margin-left:5%">Queries:</h3><br>

<h4 style="margin-left:10%;"><table><tr><th>Name</th><th>Telephone Number</th><th>Email</th><th>Message</th></tr></h4>
<?php
	$sql = "SELECT `Name`, `Phone`, `Email`, `msg` FROM `query`";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
   		 // output data of each row
   		 while($row = $result->fetch_assoc()) {
	   		echo "<tr ><td>" . $row["Name"]. "</td><td>" . $row["Phone"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["msg"]. "</td></tr>";
   		 }echo "</table>";
	} else {
   		echo "0 results";
	}
?>
<br><br>
<a href="manage.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
<br><br>
</form>


</div><br><br><br>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> Hostel Management System &copy; 2008 | Privacy Policy | Design by:Maham Iftikhar</div>
    </div>
  </div>
</footer>
</body>
</html>