<?php
include("../connection/conn.php");
$adminid=$_REQUEST['adminid'];
mysql_query("delete from adminreg where adminid=$adminid");
header('location:adminview.php');
?>