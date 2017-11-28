<?php
include("../connection/conn.php");
$areaid=$_REQUEST['areaid'];
mysql_query("delete from area where areaid=$areaid");
header('location:areaview.php');
?>