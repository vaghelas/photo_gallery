<?php include("maintop.php"); ?>
  <div id="top_banner"> <a href="index.php"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
<!--<div><a href="#" title="f6"><img src="slider/mainslide/data1/tooltips/f8.jpg" alt="f8" height="300px" width="850px"/></a>
</div>
--><div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="slider/mainslide/data1/images/f1.jpg" alt="f1" title="f1" id=""/></li>
<li><img src="slider/mainslide/data1/images/f2.jpg" alt="f2" title="f2" id=""/></li>
<li><img src="slider/mainslide/data1/images/f3.jpg" alt="f3" title="f3" id=""/></li>
<li><img src="slider/mainslide/data1/images/f4.jpg" alt="f4" title="f4" id=""/></li>
<li><img src="slider/mainslide/data1/images/f5.jpg" alt="f5" title="f5" id=""/></li>
<li><img src="slider/mainslide/data1/images/f6.jpg" alt="f6" title="f6" id=""/></li>
<li><img src="slider/mainslide/data1/images/f8.jpg" alt="f8" title="f8" id=""/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="f1"><img src="slider/mainslide/data1/tooltips/f1.jpg" alt="f1"/>1</a>
<a href="#" title="f2"><img src="slider/mainslide/data1/tooltips/f2.jpg" alt="f2"/>2</a>
<a href="#" title="f3"><img src="slider/mainslide/data1/tooltips/f3.jpg" alt="f3"/>3</a>
<a href="#" title="f4"><img src="slider/mainslide/data1/tooltips/f4.jpg" alt="f4"/>4</a>
<a href="#" title="f5"><img src="slider/mainslide/data1/tooltips/f5.jpg" alt="f5"/>5</a>
<a href="#" title="f6"><img src="slider/mainslide/data1/tooltips/f6.jpg" alt="f6"/>6</a>
<a href="#" title="f8"><img src="slider/mainslide/data1/tooltips/f8.jpg" alt="f8"/>6</a>
</div></div>
	</div>
	<script type="text/javascript" src="slider/mainslide/engine1/wowslider.js"></script>
	<script type="text/javascript" src="slider/mainslide/engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
<div id="page_content_left">
 <?php 
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$id=$_REQUEST['id'];
?>
 <?php
	$sql=mysql_query("select * from about limit 1,2");
	while($row=mysql_fetch_array($sql))
	{
		$id=$row[0];
		
   ?>
    <div class="title"> <?php echo $row[1]; ?> </div>
    <div class="content_text"><?php echo $row[2]; ?></div> <?php
	}
	 ?>
     <div class="title">
<?php      $sql1=mysql_query("select * from about limit 1");
	while($row1=mysql_fetch_array($sql1))
	{
		$id=$row1[0];

      echo $row1[1]; ?></div>
    <div class="content_text"><div class="content_text"> <img src="images/illustr2.jpg" width="130" height="79" alt="" class="pic" />
    </div><?php echo $row1[2];} ?>
    </div>
    <div>
    <marquee direction="up">
    <?php      $sql2=mysql_query("select * from letestnews");
	while($row2=mysql_fetch_array($sql2))
	{
		$id=$row2[0];
        echo "<img src='images/pic/$row2[1]' alt=''  height='30px' width='50px'>";
		echo $row2[2];
				echo "<br/>";

	}?>
    </marquee>
    
    </div>
    <div class="title"> Partners </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/csscreme.jpg" width="106" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/wallpaperstock.jpg" width="100" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/inethouse.jpg" width="103" height="34" alt="" class="inspiration" /></a> </div>
  </div>
  <div id="page_content_right">
    <div class="title"> Latest photos </div>
    <div class="content_text"> 
     </div>
    <table>
    <tr>
    <td>
    <div class="content_text">
   <?php
	$sql3=mysql_query("select * from sellerevent where category='art'");
while($row3=mysql_fetch_row($sql3))
{
 $id=$row3[0];
    echo  "<a href='details.php?id=$id'><img src='seller/photomapping/$row3[5]' width='100' height='100' alt='' class='gallery' /></a>"; ?> 
     <!--<a href="details.html"><img src="images/pic/2.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/3.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/4.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/5.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/6.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/7.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/8.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/9.jpg" width="100" height="100" alt="" class="gallery" /></a> 
	 -->  <?php }?>
</div>
</td></tr>
 <tr>
    <td>
    <div class="content_text">
   <?php
	$sql4=mysql_query("select * from sellerevent where category='music' limit 3");
while($row4=mysql_fetch_row($sql4))
{
 $id=$row4[0];
echo "<a href='details.php?id=$id'><img src='seller/photomapping/$row4[5]' width='100' height='100' alt='' class='gallery'/></a>";?>
  <?php }?>
</div>
</td></tr>
 <tr>
    <td>
    <div class="content_text">
   <?php
	$sql5=mysql_query("select * from sellerevent where category='painting'");
while($row5=mysql_fetch_row($sql5))
{
  $id=$row5[0];
echo "<a href='details.php?id=$id'><img src='seller/photomapping/$row5[5]' width='100' height='100' alt='' class='gallery'/></a>";?>
     <!--<a href="details.html"><img src="images/pic/2.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/3.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/4.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/5.jpg" width="100" height="100" alt="" class="gallery" /></a>
      <a href="details.html"><img src="images/pic/6.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/7.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/8.jpg" width="100" height="100" alt="" class="gallery" /></a>
       <a href="details.html"><img src="images/pic/9.jpg" width="100" height="100" alt="" class="gallery" /></a> 
	 -->  <?php }?>
</div>
</td></tr>

</table>
    <div class="more"> <img src="images/more.jpg" width="20" height="20" alt="" border="0" class="more" />
      <div class="link_more"><a href="gallery.html"> Visit gallery</a></div>
    </div>
  </div>
  <div id="page_bottom">
    <div class="title"> Inspiration Site </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/s5.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s2.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s3.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s4.jpg" width="125" height="40" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/s1.jpg" width="125" height="40" alt="" class="inspiration" /></a> </div>
  </div>
</div>
<?php include("mainfoter.php"); ?>
