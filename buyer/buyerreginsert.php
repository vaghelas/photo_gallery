<?php
mysql_connect("localhost","root","");
mysql_select_db("gallery");
$name=$_POST['txtname'];
$address=$_POST['txtaddress'];
$city=$_POST['city'];
$area=$_POST['area'];
$contactno=$_POST['txtcontactno'];
$gender=$_POST['txtradio'];
$email=$_POST['txtemail'];
$username=$_POST['txtusername'];
$password=$_POST['txtpassword'];
$status=$_POST['txtstatus'];
$roll=$_POST['roll'];
if(isset($_POST['submit']))
{
//move_uploaded_file($_FILES['file']['tmp_name'],"sellerphoto/".$_FILES['file']['name']);
mysql_query("insert into sellerreg(name,address,city,area,contactno,gender,email,username,password,status,roll) values('$name','$address','$city','$area','$contactno','$gender','$email','$username','$password','Inactive','$roll')"); 
echo "record insert successfully....";
header('location:buyerlogin.php');
}

?>
