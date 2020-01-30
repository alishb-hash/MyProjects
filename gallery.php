<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System | Gallery</title>
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
        <form id="search" action="gallery.php" method="GET">
          <input type="text" name="s">
          <a onClick="document.getElementById('search').submit()"></a>
          <div class="clear"></div>
        </form>
        <div class="socials"> <a href="https://twitter.com/HostelBookers"></a> <a href="https://www.facebook.com/groups/thehostelworkers/"></a> <a href="https://plus.google.com/+DwellHostel-tw"></a> <a href="https://piazza.com/careers/dashboard#/company_profile/qualcomm"></a> </div>
        <nav>
          <ul class="sf-menu">
            <li><a href="index.php">Home</a></li>
            <li class="current"><a href="gallery.php">Gallery</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="rules.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
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
      <div class="content"><h3>Gallery</h3>
        <div class="grid_5 alpha">
          <div class="block1"> <img src="images/img4.jpg" alt="" class="img_inner fleft">
            <div>
              <h3>Double Seated Rooms</h3>
              <ul class="list">
                <li>1 Fan</li>
                <li>2 Lights</li>
                <li>2 Cupboards</li>
                <li>Attach Bath & Kitchen</li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
          <div class="block1"> <img src="images/img5.jpg" alt="" class="img_inner fleft">
            <div>
              <h3>TV lounge</h3>
              <ul class="list">
                <li>1 large size LCD</li>
                <li>2 Sofa Set</li>
                <li>1 AC</li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
          <div class="block1"> <img src="images/img6.jpg" alt="" class="img_inner fleft">
            <div>
              <h3>Upper View</h3>
              <ul class="list">
                <li>Airy</li>
                <li>Clean</li>
                <li>Well decorated</li>
              </ul>
            </div>
	  
            <div class="clear"></div>
          </div>
	 <div class="block1"> <img src="images/img7.jpg" alt="" class="img_inner fleft">
            <div>
              <h3>Front Ground</h3>
              <ul class="list">
                <li>Grassy Plot</li>
                <li>Benches</li>
                <li>Plants & Flowers</li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
	 <div class="block1"> <img src="images/img1.jpg" alt="" class="img_inner fleft">
            <div>
              <h3>Kitchen</h3>
              <ul class="list">
                <li>Well Furnished</li>
                <li>Grocery Availaable</li>
                <li>Gas Stove</li>
                <li>Oven</li>
              </ul>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
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