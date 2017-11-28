<?php
include("../connection/conn.php");
$cid=$_REQUEST['cid'];
mysql_query("delete from category where cid=$cid");
header('location:categoryview.php');
?>