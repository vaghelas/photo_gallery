<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$name=$_POST['txtname'];
$address=$_POST['txtaddress'];
$gender=$_POST['txtradio'];
$bd=$_POST['txtbod'];
$city=$_POST['city'];
$area=$_POST['area'];
$contactno=$_POST['txtcontactno'];
$speciality=$_POST['txtspeciality'];
$award=$_POST['txtaward'];
$email=$_POST['txtemail'];
$username=$_POST['txtusername'];
$pass=$_POST['txtpass'];
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


mysql_query("insert into sellerreg(name,address,gender,bd,city,area,contactno,speciality,awardwin,photo,email,username,password) values('$name','$address','$gender','$bd','$city','$area','$contactno','$speciality','$award','$photo','$email','$username','$pass')"); 
echo "record insert successfully....";
}
}
header('location:sellerview.php');
?>
