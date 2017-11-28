<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$sellerid=$_REQUEST['sellerid'];

$sql=mysql_query("select status from sellerreg where sellerid='$sellerid'");
$row=mysql_fetch_array($sql);
if($row['status']=='Inactive')
{
mysql_query("update sellerreg set status='Active' where sellerid='$sellerid'");
header('location:sellerview.php');
}
elseif($row['status']=='Active')
{
mysql_query("update sellerreg set status='Inactive' where sellerid='$sellerid'");
header('location:sellerview.php');
}
?>