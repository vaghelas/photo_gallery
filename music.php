<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoGallery - Gallery</title>
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
  <div id="page_content">
  
    <div class="title"> Music gallery </div>
     <div class="details">
      <ul class="services">
        <li><a href="art.php" class="nav_services">Art photo</a></li>
      </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="details">
      <ul class="services">
        <li><a href="music.php" class="nav_services">Music Information</a></li>
      </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="details">
      <ul class="services">
        <li><a href="paint.php" class="nav_services">Paint photo</a></li>
      </ul>
    </div>
    <div class="title"> People Photo </div>
      <?php 
   mysql_connect("localhost","root","");
   mysql_select_db("gallery");
	$id=$_REQUEST['id'];
	$sql=mysql_query("select * from sellerphotomapping");
	?>
    <div class="content_text">
    <?php 
	while($row=mysql_fetch_array($sql))
	{
		$id=$row[0];
    echo"<a href='details.php?id=$id'><img src='seller/photomapping/$row[3]' width='100' height='100' alt='' class='gallery' /></a>";?>
   <?php /*?>  <a href="details.html"><img src="images/pic/2.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/3.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/4.jpg" width="100" height="100" alt="" class="gallery" /></a>
        <a href="details.html"><img src="images/pic/5.jpg" width="100" height="100" alt="" class="gallery" /></a>
         <a href="details.html"><img src="images/pic/6.jpg" width="100" height="100" alt="" class="gallery" /></a>
          <a href="details.html"><img src="images/pic/7.jpg" width="100" height="100" alt="" class="gallery" /></a>
           <a href="details.html"><img src="images/pic/8.jpg" width="100" height="100" alt="" class="gallery" /></a>
            <a href="details.html"><img src="images/pic/9.jpg" width="100" height="100" alt="" class="gallery" /></a>
             <a href="details.html"><img src="images/pic/1.jpg" width="100" height="100" alt="" class="gallery" /></a>
              <a href="details.html"><img src="images/pic/2.jpg" width="100" height="100" alt="" class="gallery" /></a>
               <a href="details.html"><img src="images/pic/3.jpg" width="100" height="100" alt="" class="gallery" /></a> </div>
   <?php */?>  <?php } ?>

    <div class="menu_navigation">
      <div id="left">
        <div class="left"><img src="images/more_l.jpg" width="20" height="20" alt="" border="0" class="more" /></div>
        <div class="right"><a href="gallery.html">Previous page</a></div>
      </div>
      <div id="right">
        <div class="right"><a href="gallery.html">Next page</a></div>
        <div class="left"><img src="images/more.jpg" width="20" height="20" alt="" border="0" class="more" /></div>
      </div>
    </div>
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
