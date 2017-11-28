<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoGallery - Details</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link rel="stylesheet" type="text/css" href="../div.css" />

</head>
<body>
<div id="top_menu">
  <ul class="menu">
    <li><a href="http://www.free-css.com/" class="nav">home</a></li>
    <li><a href="http://www.free-css.com/" class="nav">about us</a></li>
    <li><a href="http://www.free-css.com/" class="nav">services</a></li>
    <li><a href="art.php" class="nav">gallery</a></li>
    <li><a href="contact.html" class="nav">contact</a></li>
   <li>
   <?php
		session_start();
		echo 	$_SESSION['username'];
 echo     $sellerid=$_SESSION['sellerid'];

		mysql_connect("localhost","root","");
mysql_select_db("gallery");

//$sellerid=$_REQUEST['sellerid'];
	if(isset($_SESSION['username']))
	{ 
	$sql=mysql_query("SELECT * FROM tmp_cart where sellerid='$sellerid' ");
	$row=mysql_num_rows($sql);
	echo "<a href='buyerlogout.php' class='nav'>logout</a>";
      echo "<a href='addtocart.php?sellerid=$sellerid' class='nav'>Add To Cart($row)
 </a>";

	}
	
	else
	{
		   echo "<a href='buyerlogin.php' class='nav'>login</a>";

	}?>
   </li>
  </ul>
</div>
<div id="main_content">
