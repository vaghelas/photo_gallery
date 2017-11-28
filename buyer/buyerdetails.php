<?php include("buyermaintop.php"); ?>

 <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content_left">
    <div class="title"> Photo name </div>
    <div class="content_text"> 
        <?php 
//		echo $_SESSION['username'];
   //include("connection/conn.php");
   mysql_connect("localhost","root","");
   mysql_select_db("gallery");
   echo $id=$_REQUEST['id'];
   //$eid=$_REQUEST['eid'];
      $sql=mysql_query("select * from sellerphotomapping where id='$id'");
	while($row=mysql_fetch_array($sql))
	{
	 $id=$row[0];
	 $eid=$row[2];
	 $sellerid=$row[1];
		echo "<img src='../seller/photomapping/$row[3]' width='365' height='190' alt='' class='pic' onclick='' />";
	}
	?></div>
        <?php
	 
    $sql4=mysql_query("select * from sellerevent where eid='$eid'");
		?>
    
    
    <div class="title"> About photo </div>
    <?php
	while($row4=mysql_fetch_array($sql4))
	{
	 $eid=$row4[0];
?>
<div class="content_text"><?php echo $row4[3];?></div>
    <?php }?>
    <div class="title"> Partners </div>
    <div class="content_text"> <a href="http://www.free-css.com/"><img src="images/csscreme.jpg" width="106" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/wallpaperstock.jpg" width="100" height="34" alt="" class="inspiration" /></a> <a href="http://www.free-css.com/"><img src="images/inethouse.jpg" width="103" height="34" alt="" class="inspiration" /></a> </div>
  </div>
  
  <div id="page_content_right">
   <div class="title"> Photo details </div>
    
   <?php 
   include("../connection/conn.php");
   echo $id=$_REQUEST['id'];
      $sql5=mysql_query("select * from sellerphotomapping where id='$id'");
	while($row5=mysql_fetch_array($sql5))
	{
	 $id=$row5[0];
	?>
    
    <div class="content_text"><?php echo $row5[5];?></div>
   <?php 
	
	$cid=$row[0];
	$sql1=mysql_query("select * from category where cid='1'");
	$sql2=mysql_query("select * from category where cid='2'");
	$sql3=mysql_query("select * from category where cid='3'");
	
	?>
    <div class="title"> Categories </div>
    <div class="details">
      <?php
	  while($row1=mysql_fetch_array($sql1))
	{
	$cid=$row1[0];
	?>
        <a href="../art.php" class="nav_services"><?php echo $row1[1];?></a>
        <?php }?>
        
        
      <?php
	  while($row2=mysql_fetch_array($sql2))
	{
	$cid=$row2[0];
	?>
        <a href="music.php" class="nav_services"><?php echo $row2[1];?></a>
        <?php }?>
     
      <?php
	  while($row3=mysql_fetch_array($sql3))
	{
	$cid=$row3[0];
	?>
        <a href="paint.php" class="nav_services"><?php echo $row3[1];?></a>
        <?php }?>
        
        
      
    </div>
    <div class="title"> Photo size </div>
    <div class="details">
      <ul class="services">
     <?php /*?> <?php
    while($row5=mysql_fetch_array($sql5))
	{
	 $id=$row5[0];
	 
	?><?php */?>
    
        <li><a href="http://www.free-css.com/" class="nav_services"><?php echo $row5[6];?></a></li>
        <li><a href="http://www.free-css.com/" class="nav_services"><?php echo $row5[7];?></a></li>
        <li><a href="http://www.free-css.com/" class="nav_services"><?php echo $row5[8];?></a></li>
        <li><a href="http://www.free-css.com/" class="nav_services"><?php echo $row5[9];?></a></li>
        <li><a href="http://www.free-css.com/" class="nav_services"><?php echo $row5[4];?></a></li>
        <li>
        <?php
		//session_start();
		echo $sellerid2=$_SESSION['sellerid'];
		$sql6=mysql_query("select * from sellerreg where sellerid='$sellerid2'");
		while($row6=mysql_fetch_row($sql6))
		{
		$sellerid1=$row6[0];
		
		}
        echo "<form method='post' action='insertdetails.php?id=$id&eid=$eid&sellerid=$sellerid2'>";
        if(isset($_SESSION['username']))
	
		{
		
		
		 echo "<input type='submit' name='submit' value='Add To Cart' />"; 
		 		
				}
				
		else
		{
				 echo "<a href='buyerlogin.php' class='nav_services_a'>Buy Now</a>";

		}
		        echo "</form>";

		?>
		</li>
    
     
      </ul>
           <?php }?>

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
