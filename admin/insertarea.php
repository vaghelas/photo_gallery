<?php

mysql_connect("localhost","root","");
mysql_select_db("gallery");
$area=$_POST['txtarea'];
$city=$_POST['city'];
$sql=mysql_query("select * from city where city='$city'");
if(isset($_POST['submit']))
{

while($row=mysql_fetch_row($sql))
{
$cityid=$row[0];
}
mysql_query("insert into area(cityid,area) values('$cityid','$area')");

echo "record insert successfully....";
}
?>