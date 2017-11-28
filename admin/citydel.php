<?php
include("../connection/conn.php");
$cityid=$_REQUEST['cityid'];
mysql_query("delete from city where cityid=$cityid");
header('location:cityview.php');
?>