<?php
	require 'DBConfigure/config.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Admin Detail</title>
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
        <center><h3>Admins Detail</h3></center>
<br><br>

<?php
	$name= $_SESSION['Ad_name'];
	$sql = "SELECT * from admin";
	$result = $con->query($sql);
	if($name == 'maham')
	{
		if ($result->num_rows > 0) {
   			echo "<table ><tr><th>Name</th><th>Password</th></tr>";
   			 // output data of each row
    		while($row = $result->fetch_assoc()) {
	   		echo "<tr><td>" . $row["Ad_name"]. "</td><td>" .$row["Ad_password"]." </td></tr>";
  		 } echo "</table>";
		} else {
   			echo "0 results";
		}
	}
	else
	{
		if ($result->num_rows > 0) 
		{
  			 echo "<table><tr><th>Name</th></tr>";
   			 // output data of each row
   			 while($row = $result->fetch_assoc()) 
			{
	   			echo "<tr><td>" . $row["Ad_name"]. "</td></tr>";
  			 } echo "</table>";
		} else 
		{
  			 echo "0 results";
		}
	}
?>
<br><br>
<form class="myform" action="ad_details.php" method="POST"  >
<br><br><a href="admin.php"><input style="background-color:#990028;color:white;" type="button" id="back_btn" value="Back"/></a>
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