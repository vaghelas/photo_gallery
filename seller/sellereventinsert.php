<?php
session_start();
$sellerid=$_SESSION['sellerid'];
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$title=$_POST['txttitle'];
$description=$_POST['txtdes'];
$address=$_POST['txtadd'];
$stime=$_POST['stime'];
$etime=$_POST['etime'];
$sdate=$_POST['txtsdate'];
$edate=$_POST['txtedate'];
$category=$_POST['category'];
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
	


mysql_query("insert into sellerevent(sellerid,title,description,address,photo,stime,etime,sdate,edate,category) values('$sellerid','$title','$description','$address','$filename','$stime','$etime','$sdate','$edate','$category')"); 
echo "record insert successfully....";
header('location:sellereventview.php?msg=success');
}else
	 {
	 	 
	 echo "Please enter valid image";
	 }
}
header('location:sellereventview.php?msg=success');
?>