<?php
session_start();
$sellerid=$_SESSION['sellerid'];
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$id=$_REQUEST['id'];
//$eid=$_POST['eid'];
$sql=mysql_query("select eid from sellerevent where sellerid='$sellerid'");

$cost=$_POST['txtcost'];
$description=$_POST['txtdes'];
$sizepx=$_POST['sizepx'];
$sizeinch=$_POST['sizeinch'];
$sizecm=$_POST['sizecm'];
$sizebytes=$_POST['sizebytes'];
$qty=$_POST['txtqty'];
$checksize=$_POST['txtcheck'];

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
	while($row=mysql_fetch_array($sql))
	{
		$eid=$row[0];
	}


mysql_query("insert into sellerphotomapping(sellerid,eid,photo,cost,description,sizepx,sizeinch,sizecm,sizebytes,qty,checksize) values('$sellerid','$eid','$filename','$cost','$description','$sizepx','$sizeinch','$sizecm','$sizebytes','$qty','$checksize')"); 
echo "record insert successfully....";
header('location:sellereventview.php');
}else
	 {
	 	 echo "Please enter valid image";

	 }
}
		 header('location:sellereventview.php');

?>