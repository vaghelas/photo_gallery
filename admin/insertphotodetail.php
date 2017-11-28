<?php 
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$name=$_POST['txtname'];
$photo=$_FILES['file']['name'];
$code=$_POST['txtcode'];

$description=$_POST['txtdesc'];
$size=$_POST['txtsize'];
$category=$_POST['category'];

if(isset($_POST['submit']))
{
//move_uploaded_file($_FILES['file']['tmp_name'],"sellerphoto/".$_FILES['file']['name']);
mysql_query("insert into photodetail(sellerid,name,photo,photocode,description,size,category) values('$sellerid1','$name','$photo','$code','$description','$size','$category')"); 
//echo "record insert successfully....";
}

?>
