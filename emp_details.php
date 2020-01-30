<?php
	require 'DBConfigure/config.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Employees Detail</title>
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
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
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
        <center><h3>Employees Detail</h3></center>
<br><br>

<?php
	$sql = "SELECT employee.Emp_fname, employee.Emp_lname, employee.emp_email, employee.emp_cnic, employee.emp_pho_no, employee.emp_sal, employee.emp_hiredate, e_address.e_house_no, e_address.e_street_no, e_address.e_city, e_address.e_country, e_address.e_zip_code FROM employee ,e_address WHERE employee.emp_cnic=e_address.emp_cnic";
	$result = $con->query($sql);
if ($result->num_rows > 0) {
   echo "<table><tr><th>Name</th><th>Email</th><th>CNIC</th><th>Phone Number</th><th>Salary</th><th>Hiredate</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
	   echo "<tr><td>" . $row["Emp_fname"]. " " . $row["Emp_lname"]. "</td><td>" . $row["emp_email"]. "</td><td>" . $row["emp_cnic"]. "</td>
		<td>" . $row["emp_pho_no"]. "</td><td>" . $row["emp_sal"]. "</td><td>" . $row["emp_hiredate"]. "</td>
		<td>" . $row["e_house_no"]. ", " . $row["e_street_no"]." ," . $row["e_city"].", " . $row["e_country"].", " . $row["e_zip_code"]. "</td></tr>";
   } echo "</table>";
} else {
   echo "0 results";
}
?>
<br><br>
<form class="myform" action="emp_register.php" method="POST"  >
<br><br><a href="employee.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
</form>
<br><br>
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