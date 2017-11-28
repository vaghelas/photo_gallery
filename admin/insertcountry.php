<?php
mysql_connect("localhost","root","");
mysql_select_db("advertisement")or die("Not Connected");
$country=$_POST['txtcountryname'];

if(isset($_POST['submit']))
{
$sql=mysql_query("insert into country(countryname,status,createddate)values('$country',0,now())");
header('location:../country.php?msg=success');
}
else
{
echo "Record Not Inserted";
}
?>