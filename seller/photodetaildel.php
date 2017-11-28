<?php
include("../connection/conn.php");
$photoid=$_REQUEST['photoid'];
mysql_query("delete from photodetail where photoid=$photoid");
header('location:photodetailview.php?msg=delete');
?>