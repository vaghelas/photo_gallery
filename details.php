<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoGallery - Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="top_menu">
  <ul class="menu">
    <li><a href="http://www.free-css.com/" class="nav">home</a></li>
    <li><a href="http://www.free-css.com/" class="nav">about us</a></li>
    <li><a href="http://www.free-css.com/" class="nav">services</a></li>
    <li><a href="art.php" class="nav">gallery</a></li>
    <li><a href="contact.html" class="nav">contact</a></li>
    <li><a href="buyer/buyerlogin.php" class="nav">login</a></li>
  </ul>
</div>
<div id="main_content">
  <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content_left">
    <div class="title"> Photo name </div>
    <div class="content_text"> 
        <?php
		session_start();
	echo 	$_SESSION['username']; 
   mysql_connect("localhost","root","");
   mysql_select_db("gallery");
   $id=$_REQUEST['id'];
   $sql=mysql_query("select * from sellerphotomapping where id='$id'");
	while($row=mysql_fetch_array($sql))
	{
	 $id=$row[0];
		echo "<img src='seller/photomapping/$row[3]' width='365' height='190' alt='' class='pic' onclick='' />";
	}
	?></div>
    <div class="title"> About photo </div>
    <div class="content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </div>
    <div class="title"> Partners </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/csscreme.jpg" width="106" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/wallpaperstock.jpg" width="100" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/inethouse.jpg" width="103" height="34" alt="" class="inspiration" /></a> </div>
  </div>
  <div id="page_content_right">
    <div class="title"> Photo details </div>
    <div class="content_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </div>
    <div class="title"> Categories </div>
    <div class="details">
      <ul class="services">
        <li><a href="art.php" class="nav_services">Art photo</a></li>
        <li><a href="music.php" class="nav_services">Music Information</a></li>
        <li><a href="paint.php" class="nav_services">Paint photo</a></li>
        
      </ul>
    </div>
    <div class="title"> Photo size </div>
    <div class="details">
      <ul class="services">
        <li><a href="http://www.free-css.com/" class="nav_services">1600 x 1200 pixels</a></li>
        <li><a href="http://www.free-css.com/" class="nav_services">5.3" x 4"</a></li>
        <li><a href="http://www.free-css.com/" class="nav_services">13.5cm x 10.2cm at 300dpi</a></li>
        <li><a href="http://www.free-css.com/" class="nav_services">(639 Kbytes)</a></li>
        <li><a href="buyer/buyerreg.php" class="nav_services_a">Buy Now</a></li>
      </ul>
    </div>
    <div class="title"> Keywords </div>
    <div class="content_text"> <span style="color:#990000; padding:5px;"> liquid light colors colorful inside water shape texture abstract dream yellow red dark game form liquid light colors colorful inside water shape texture abstract dream yellow red dark game form </span> </div>
  </div>
  <div id="page_bottom">
    <div class="title"> Inspiration Site </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/s5.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s2.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s3.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s4.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s1.jpg" width="125" height="40" alt="" class="inspiration" /></a> </div>
  </div>
</div>
<div id="footer">
  <div id="footer_content">
    <div id="copyrights"> Quartz Solution.&copy; All Rights Reserved 2007 </div>
    <div>
      <ul class="footer_menu">
        <li><a href="http://www.free-css.com/" class="nav2">home </a></li>
        <li><a href="http://www.free-css.com/" class="nav2">services</a></li>
        <li><a href="http://www.free-css.com/" class="nav2">gallery</a></li>
        <li><a href="http://www.free-css.com/" class="nav2">contact</a></li>
      </ul>
    </div>
    <div id="madeby"> <a href="http://www.csscreme.com"><img src="images/csscreme_link.jpg" width="125" height="40" border="0" alt="" /></a><br />
      <a target="_blank" href="http://validator.w3.org/check?uri=referer">Xhtml</a> <a target="_blank" href="http://jigsaw.w3.org/css-validator/check/referer">css</a> </div>
  </div>
</div>
</body>
</html>
