<?php include("buyermaintop.php"); ?> 
  <div id="top_banner"> <a href="http://www.free-css.com/"><img src="images/logo.jpg" width="230" height="130" alt="" border="0" class="logo" /></a> </div>
  <div id="page_content">
 
<div>
<img src="f8.jpg"  width="800" height="300"/>
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
    <h4><a href="../current.php">Current Exhibition</a></h4><br/>
    <h4><a href="../upcoming.php">Upcomming Exhibition</a></h4><br/>
    <h4><a href="../past.php">Past Exhibition</a></h4><br/>
     </div>
    
   <div id="div4">
  <div>
  &nbsp;
&nbsp;
&nbsp;
&nbsp;
  </div>
  <div id="content">
  <h5>Cart Information</h5>
  </div>
   <div class="content_text">
 <?php
 session_start();
 echo $sellerid=$_SESSION['sellerid'];
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$orderid=$_REQUEST['orderid'];
$sql=mysql_query("select * from orders where sellerid='$sellerid'");
echo "<table align='center' style='color:#3333FF' class='mytable'>";
echo "<tr  align='center' style='font-size:16px;'>";
echo "<th>";
echo "Event Name";
echo "</th>";
echo "<th>";
echo "Event Image";
echo "</th>";
echo "<th>";
//echo "cost";
echo "</th>";
echo "<th>";
echo "Delete";
echo "</th>";
echo "<th>";
echo "Approval";
echo "</th>";
echo "</tr>";
while($row=mysql_fetch_array($sql))
{
$cartid=$row[0];
echo "<tr  align='center'>";
echo "<td style='font-size:16px;'>";
$eid=$row[3];
$sql2=mysql_query("select * from sellerevent where eid='$eid'");
while($row2=mysql_fetch_array($sql2))
{
echo $eid=$row2[0];
echo $eventname=$row2[2];
}

echo "</td>";
echo "<td style='font-size:16px;'>";
 $id=$row[4];
$sql1=mysql_query("select * from sellerphotomapping where id='$id'");
while($row1=mysql_fetch_array($sql1))
{
$id=$row1[0];
echo "<img src='../seller/photomapping/$row1[3]' width='100' height='100' > ";

}
echo "</td>";
echo "<td style='font-size:16px;'>";
//echo $row[4];
echo "</td>";
echo "<td style='font-size:16px;'>";
echo "<a href='tmpcartdelete.php?cartid=$cartid'>delete</a>";
echo "</td>";
echo "<td style='font-size:16px;'>";
$sql3=mysql_query("select * from orders where orderid='$orderid' ");
while($row3=mysql_fetch_row($sql3))
{
	 $orderid=$row3[0];
	 $status=$row3[6];
	 echo "<a href='buyerapproval.php?sellerid=$sellerid&orderid=$orderid' class='label label-important'>".$row3[6]."</a>";

}

echo "</td>";
echo "</tr>";
}
echo "</table>";


?>

</div>
<div align="center">
 <div style="background:url(buy-btn.png) repeat-x 0 0; width:300px; height:30px;color:#FFF; margin:15px 0 0 100px; text-align:center; line-height:30px; font-size:15px; border-radius:10px;"><label>TOTAL AMOUNT &nbsp;&nbsp;:  &nbsp; &nbsp; </label><?php
    			 $sellerid=$_REQUEST['sellerid'];

	  
	   $result1=mysql_query("select sum(cost) from tmp_cart where sellerid='$sellerid'");
		while ($amount = mysql_fetch_array($result1)) {
		 $amount[0];
		echo  $_SESSION['totalcost']=$amount['sum(cost)'];
		}
		
	 
	   ?>
				
	</div>   

    <div align="center">
    <?php
echo "<form action='insertorder.php?sellerid=$sellerid&eid=$eid&id=$id' method='post'>";?> 
<input type="submit" name="submit" value="MAKE ORDER"  style="background:url(buy-btn.png) repeat-x 0 0; width:300px; height:30px;color:#FFF; margin:15px 0 0 0; text-align:center; line-height:30px; font-size:15px; border-radius:10px;" />
	</form>

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
