<?php
session_start();
echo $sellerid=$_SESSION['sellerid'];
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$orderid=$_REQUEST['orderid'];
$sql=mysql_query("select status from orders  where orderid='$orderid' ");
$row=mysql_fetch_array($sql);
if($row['status']=='pendding')
{
mysql_query("update orders set status='approve' where orderid='$orderid'");
header('location:addtocart.php?sellerid='.$sellerid.'&orderid='.$orderid.'');
}
elseif($row['status']=='approve')
{
mysql_query("update orders set status='canclled' where orderid='$orderid'");
header('location:addtocart.php?sellerid='.$sellerid.'&orderid='.$orderid.'');
}
elseif($row['status']=='canclled')
{
mysql_query("update orders set status='pendding' where orderid='$orderid'");
header('location:addtocart.php?sellerid='.$sellerid.'&orderid='.$orderid.'');
}

?>