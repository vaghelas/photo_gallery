<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$category=$_POST['txtcategory'];
if(isset($_POST['submit']))
{
mysql_query("insert into category(category) values('$category')");
echo "record insert successfully....";
}
?>