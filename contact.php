<?php include("maintop.php"); ?>
<?php
include("connection/conn.php");
$id=$_REQUEST['id'];
$sql=mysql_query("select * from contact");
while($row=mysql_fetch_array($sql))
{
?>
  <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div>
<img src="images2.jpg" width="850" height="250"/>
</div>&nbsp;&nbsp;&nbsp;

  <div id="page_content_left">
    <div class="title"><?php echo $row[1];?></div>
    <div class="content_text"><?php echo $row[2];?> </div>
    <div class="title"><?php echo $row[3];?></div>
    <div class="content_text"> <h2>Adress:<?php echo $row[4];?></h2>
      <h2>Street:<?php echo $row[5];?></h2>
      <h2>City: <?php echo $row[6];?></h2>
      <h2>Contry:<?php echo $row[7];?></h2>
      
      <h2>Mail:<?php echo $row[8];?></h2>
    </div>
    
    <div class="title"> Partners </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/csscreme.jpg" width="106" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/wallpaperstock.jpg" width="100" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/inethouse.jpg" width="103" height="34" alt="" class="inspiration" /></a> </div>
  </div>
  <div id="page_content_right">
    <div class="title"><?php echo $row[9];?></div>
    <div class="content_text"><?php echo $row[10];?></div>
    <div id="login">
    <?php }?>
      <label class="title">Username:</label>
      <input type="text" name="txtuser" class="text1" />
      <div class="clear"></div>
      <label class="title">Phone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="txtphone"  class="text1" />
      <div class="clear"></div>
      <label class="title">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="txtmail"  class="text1" />
      <div class="clear"></div>
      <label class="title">Web:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="txtweb"  class="text1" />
      <div class="clear"></div>
      <label class="title">Comments:</label>
      <textarea name="text" cols="txtcomments" rows="" class="textarea"></textarea>
      <div class="clear"></div>
      <div style="padding-left:90px;">
        <div class="right"><a href="gallery.html">Send</a></div>
        <div class="left"><img src="images/more.jpg" width="20" height="20" alt="" border="0" class="more" /></div>
      </div>
    </div>
  </div>
  <div id="page_bottom">
    <div class="title"> Inspiration Site </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/s5.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s2.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s3.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s4.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s1.jpg" width="125" height="40" alt="" class="inspiration" /></a> </div>
  </div>
</div>
<?php include("mainfoter.php"); ?>