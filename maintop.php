<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoGallery - Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="div.css" />
<link rel="stylesheet" type="text/css" href="slider/mainslide/engine1/style.css" />
<script type="text/javascript" src="slider/mainslide/engine1/jquery.js"></script>
</head>
<body>
<div id="top_menu">
  <ul class="menu">
      <li><a href="home.php" class="nav">home</a></li>
    <li><a href="about.php" class="nav">about us</a></li>
    <li><a href="event.php" class="nav">event</a></li>
    <li><a href="gallery.php" class="nav">gallery</a></li>
    <li><a href="contact.php" class="nav">contact</a></li>
   <li>

     <?php
		session_start();
		echo 	$seller=$_SESSION['username'];
     $sellerid=$_SESSION['sellerid'];

		mysql_connect("localhost","root","");
mysql_select_db("gallery");

//$sellerid=$_REQUEST['sellerid'];
	if(isset($_SESSION['username']))
	{ 
?>
   <?php
	//$sql=mysql_query("SELECT * FROM tmp_cart where sellerid='$sellerid'");
	//$row=mysql_fetch_row($sql);
	echo "<a href='buyer/buyerlogout.php' class='nav'>logout</a>";
      echo "<a href='buyer/addtocart.php?sellerid=$sellerid' class='nav'>Add To Cart(";
       $sellerid=$_SESSION['sellerid'];
	  $sql=mysql_query("SELECT * FROM tmp_cart  where sellerid='$sellerid'");
	echo $row=mysql_num_rows($sql);
echo ")</a>";

	}
	
	else
	{
		   echo "<a href='buyer/buyerlogin.php' class='nav'>login</a>";

	}?>
   </li>
  </ul>
</div>
<div id="main_content">
