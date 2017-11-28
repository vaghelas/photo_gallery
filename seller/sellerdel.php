<?php
include("../connection/conn.php");
$sellerid=$_REQUEST['sellerid'];
mysql_query("delete from sellerreg where sellerid=$sellerid");
header('location:sellerview.php');
?>