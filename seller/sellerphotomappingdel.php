<?php
include("../connection/conn.php");
$id=$_REQUEST['id'];
$eid=$_REQUEST['eid'];
mysql_query("delete from sellerphotomapping where id=$id");
header('location:eventimage.php');
?>