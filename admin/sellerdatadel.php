<?php
include("../connection/conn.php");
$sdataid=$_REQUEST['sdataid'];
mysql_query("delete from sellerdata where sdataid=$sdataid");
header('location:sellerdataview.php');
?>