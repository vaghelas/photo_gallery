<?php
include("../connection/conn.php");
$name=$_POST['txtname'];
$description=$_POST['txtdesc'];
if(isset($_POST['submit']))
{
mysql_query("insert into historicalplaces(name,description) values('$name','$description')");
echo "record insert......";
}
header('location:historicalplacesview.php');

?>