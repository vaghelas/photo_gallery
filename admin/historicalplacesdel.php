<?php
include("../connection/conn.php");
$hid=$_REQUEST['hid'];
mysql_query("delete from historicalplaces where hid=$hid");
header('location:historicalplacesview.php');
?>