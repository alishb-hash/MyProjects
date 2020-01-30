<?php
	require 'DBConfigure/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Hostelite Rent</title>
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
<form  action="h_rent.php" method="GET">
<br><br>
<h3 style="margin-left:5%">Rent Detail:</h3><br>
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
		echo "<tr><td>Dues Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>";
		$sql3 = "SELECT hostel_dues.* , dues.* from hostel_dues,dues where hostel_dues.due_id=dues.Due_id AND username='$name'";
		$result3 = $con->query($sql3);
		while($row3 = $result3->fetch_assoc()){
		echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row3["due_name"]. "</td></tr>";
		}
		$sql4 = "SELECT sum(charges) from hostel_dues,dues where hostel_dues.due_id=dues.Due_id AND username='$name' Group by username";
		$result4 = $con->query($sql4);
		while($row4 = $result4->fetch_assoc()){
			echo "<tr><td>Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row4["sum(charges)"]. "</td></tr>";
		}
			$date = date('d');
			$date1 = $date+7;
			$sql4 = "SELECT sum(due_fine) from hostel_dues,dues where hostel_dues.due_id=dues.Due_id AND hostel_dues.submission_date>'$date' AND hostel_dues.submission_date>'$date1' AND username='$name'Group by username ";
			$result4 = $con->query($sql4);
			while($row4 = $result4->fetch_assoc()){
				echo "<tr><td>Fine:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>"  . $row4["sum(due_fine)"]. "</td></tr>";
			}
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