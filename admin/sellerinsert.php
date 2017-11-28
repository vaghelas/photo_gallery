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
$photo=$_FILES['file']['name'];
$email=$_POST['txtemail'];
$username=$_POST['txtusername'];
$pass=$_POST['txtpass'];
if(isset($_POST['submit']))
{
//move_uploaded_file($_FILES['file']['tmp_name'],"sellerphoto/".$_FILES['file']['name']);
mysql_query("insert into sellerreg(name,address,gender,bd,city,area,contactno,speciality,awardwin,photo,email,username,password,status)
 values('$name','$address','$gender','$bd','$city','$area','$contactno','$speciality','$award','$photo','$email','$username','$pass','Active')"); 
echo "record insert successfully....";
}
header('location:sellerview.php');
?>
