<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("gallery");
 echo $sellerid=$_REQUEST['sellerid'];

echo $eid=$_REQUEST['eid'];

 $id=$_REQUEST['id'];

$sql=mysql_query("select * from sellerphotomapping where id='$id'");

 while($row=mysql_fetch_array($sql))
 {
//echo $id=$row[0];
echo "<br/>";
//echo $sellerid=$row[1];
 echo "<br/>";

//echo $eid=$row[2];
 echo "<br/>";

  echo $cost=$row[4];

 if(isset($_POST['submit']))
 {
  
 mysql_query("insert into  tmp_cart(sellerid,eid,id,cost) values('$sellerid','$eid','$id','$cost')");
header('location:../event.php?eid='.$eid.'');
 }
 }
?>