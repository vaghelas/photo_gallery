<?php
session_start();
$sellerid=$_SESSION['sellerid']; 
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$cartid=$_REQUEST["cartid"];
mysql_query("delete from tmp_cart where cartid='$cartid'");
header('location:addtocart.php?sellerid='.$sellerid.'');
?>