<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$city=$_POST['txtcity'];
if(isset($_POST['submit']))
{
mysql_query("insert into city(city) values('$city')");

echo "record insert successfully....";
}
?>