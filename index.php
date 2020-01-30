<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Home</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.jpeg">
<link rel="shortcut icon" href="images/favicon.jpeg">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/TMGPrototype2.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/TMGPrototype2.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
$(window).load(function () {
    $('#TMGPrototype2').TMGPrototype2({});
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="menu_block">
    <div class="container_12">
      <div class="grid_12">
        <form id="search" action="index.php" method="GET">
          <input type="text" name="s">
          <a onClick="document.getElementById('search').submit()"></a>
          <div class="clear"></div>
        </form>
        <div class="socials"> <a href="https://twitter.com/HostelBookers"></a> <a href="https://www.facebook.com/groups/thehostelworkers/"></a> <a href="https://plus.google.com/+DwellHostel-tw"></a> <a href="https://piazza.com/careers/dashboard#/company_profile/qualcomm"></a> </div>
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="rules.php">Rules & Regulations</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div id="TMGPrototype2">
  <ul class='sets'>
    <li data-setName="Our Mission">
      <ul>
        <li data-srcPreview="images/spark1.jpg">
          <div>
            <div class="content"> <img src="images/3.jpg" alt="">
              <h3>Our Mission</h3>
              <p>We believe that hostelling is not just about having a place to stay; it is about 
		having fun, experiencing different cultures and meeting new people. This is why 
		we work with Youth Hostel Associations worldwide to provide the best environment for you to thrive in.</p>
            </div>
          </div>
        </li>
      </ul>
    </li>
    <li data-setName="Our Vision">
      <ul>
        <li data-srcPreview="images/bg_body.jpg">
          <div>
            <div class="content"> <img src="images/4.jpg" alt="">
              <h3>Our Vision</h3>
              <p>To promote the education of all young people of all nations, but 
                 especially young people of limited means, by encouraging in them a
                 greater knowledge, love and care of the countryside and an 
                 appreciation of the cultural values of towns and cities in all parts
                 of the world, and as ancillary thereto to provide hostels or other 
                 accommodation in which there shall be no distinction of race, nationality,
                 colour, religion, sex, class, or political opinions and thereby to develop a
                 better understanding of their fellow men, both at home and abroad.</p>
            </div>
          </div>
        </li>
     </li>
  </ul>
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