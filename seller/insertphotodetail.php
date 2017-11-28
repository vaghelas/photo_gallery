<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$sellerid=$_SESSION['sellerid'];

$name=$_POST['txtname'];
$code=$_POST['txtcode'];
$description=$_POST['txtdesc'];
$size=$_POST['txtsize'];
$category=$_POST['category'];
/*$sql=mysql_query("select * from sellerreg");
while($row=mysql_fetch_array($sql))
{
	$sellerid=$row[0];
	}
*/
if(isset($_POST['submit']))
{

 $extarray=array("gif","jpg","jpeg","png");
  $photo=$_FILES['file']['name'];
  $temp =explode(".",$photo);
  $temp1=end($temp);
if((( $_FILES['file']['type'] = "images/jpeg")
    || ( $_FILES['file']['type'] = "images/jpg")
	 || ( $_FILES['file']['type'] = "images/png")
	 || ( $_FILES['file']['type'] = "images/gif"))
	 && ($_FILES['file']['size'] <200000000)
	 && in_array($temp1,$extarray))
	 {
	 $tmpname=$_FILES['file']['tmp_name'];
	 $filename=$_FILES['file']['name'];
	 
	 }
	 if(move_uploaded_file($tmpname,"photomapping/" .$filename))
	 {
mysql_query("insert into photodetail(sellerid,name,photo,photocode,description,size,category) values('$sellerid','$name','$photo','$code','$description','$size','$category')"); 
header('location:photodetailview.php?msg=success');
}
}
?>
