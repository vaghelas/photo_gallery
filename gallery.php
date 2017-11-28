<?php include("maintop.php"); ?>

 <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content">
  <div>
<img src="buyer/f8.jpg"  width="800" height="300"/>
</div>

<table>
    <tr>
    <td>
    <a href="art.php" class="nav_services">Art</a>
    </td>
    <td>
    <div class="content_text">
   <?php
   mysql_connect("localhost","root","");
mysql_select_db("gallery");
//$id=$_REQUEST['id'];
?>

<?php
	$sql3=mysql_query("select * from sellerevent where category='art' limit 5");
while($row3=mysql_fetch_row($sql3))
{
 $eid=$row3[0];
    echo  "<a href='galleryeventimage.php?eid=$eid'><img src='seller/photomapping/$row3[5]' width='100' height='100' alt='' class='gallery' /></a>"; ?> 
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
     <a href="music.php" class="nav_services">Hand Art</a>

 </td>
    <td>
    <div class="content_text">
   <?php
	$sql4=mysql_query("select * from sellerevent where category='music' limit 5");
while($row4=mysql_fetch_row($sql4))
{
 $eid=$row4[0];
echo "<a href='galleryeventimage.php?eid=$eid'><img src='seller/photomapping/$row4[5]' width='100' height='100' alt='' class='gallery'/></a>";?>
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
     <a href="paint.php" class="nav_services">Painting</a>

 </td>
    <td>
    <div class="content_text">
   <?php
	$sql5=mysql_query("select * from sellerevent where category='painting'");
while($row5=mysql_fetch_row($sql5))
{
  $id=$row5[0];
echo "<a href='galleryeventimage.php?eid=$eid'><img src='seller/photomapping/$row5[5]' width='100' height='100' alt='' class='gallery'/></a>";?>
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
</div>
</div>
<?php include("mainfoter.php"); ?>