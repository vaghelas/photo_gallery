<?php include("maintop.php"); ?>
  <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content">
 
<div>
<img src="buyer/f8.jpg"  width="800" height="300"/>
</div>
        <!-- ThumbnailNavigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Responsive Slider</a>
        <!-- Trigger -->
    </div>
     &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
   
    <div class="div1">
    <div class="div2">
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <h4 style="font-family:Brush Script Std; font-size:18px;"><a href="current.php">Current Exhibition</a></h4><br/>
    <h4 style="font-family:Brush Script Std; font-size:18px;"><a href="upcoming.php">Upcomming Exhibition</a></h4><br/>
    <h4 style="font-family:Brush Script Std; font-size:18px;"><a href="past.php">Past Exhibition</a></h4><br/>
     </div>
    
  <!--  <div class="div3">
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <h1><a href="">Current</a></h1><br/>
    <h1><a href="">Upcomming</a></h1><br/>
    <h1><a href="">Past</a></h1><br/>
    
    </div>
  -->  <div id="div4">
  <div>
  &nbsp;
&nbsp;
&nbsp;
&nbsp;
  </div>
   <div>
   
   
<?php 
   mysql_connect("localhost","root","");
   mysql_select_db("gallery");
	//$id=$_REQUEST['id'];
	$sql=mysql_query("SELECT * FROM `sellerevent` order by sdate");
	?>
    <div class="content_text">
    <?php 
	while($row=mysql_fetch_array($sql))
	{
		$eid=$row[0];
		
    echo"<a href='buyer/buyereventimage.php?eid=$eid'><img src='seller/photomapping/$row[5]' width='200' height='200' alt='' class='gallery' /></a>";?>
<?php }?>
</div>

 </div>
     
    </div>
   
    
    
    
    
 <?php /*?><?php
 include("connection/conn.php");
 $id=$_REQUEST['id'];
 $sql=mysql_query("select * from about");
 while($row=mysql_fetch_array($sql))
 {
 $id=$row[0];
 
 ?>    
<div>
<table>
<tr>
<td>
<h1>
<?php echo $row[1];?></td>
</h1>
</tr>
<tr>
<td>
<h1>
<?php echo $row[2];?>
</h1>
</td>
<?php }?>
</tr>
</table><?php */?>
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
