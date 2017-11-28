<?php
include("../connection/conn.php");
$eid=$_REQUEST['eid'];
mysql_query("delete from sellerevent where eid=$eid");
header('location:sellereventview.php?msg=delete');


?>